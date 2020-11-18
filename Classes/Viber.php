<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

use Viber\Client;
use Viber\Api\Event\Type;
use Viber\Api\Message\Type as MessageType;
use Viber\Bot;
use Viber\Api\Sender;
//use Viber\Api\Message;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Viber\Api\Event;

require '../vendor/autoload.php';

class Viber {

    private $publicPath;
    private $apiKey;
    private $botSender;
    private $companyName;
    private $colours;
    private $client;
    private $bot;
    private $subscribersIds;

    /**
     * @var Event
     */
    private $event;
    private $log;
    private $eventTypes = [
        Type::DELIVERED,
        Type::SEEN,
        Type::FAILED,
        Type::SUBSCRIBED,
        Type::UNSUBSCRIBED,
        Type::CONVERSATION,
        Type::MESSAGE,
        Type::WEBHOOK
    ];
    private $eventFunctions = [
        Type::DELIVERED => 'runDeliveredEvent',
        Type::SEEN => 'runSeenEvent',
        Type::FAILED => 'runFailedEvent',
        Type::SUBSCRIBED => 'runSubscribedEvent',
        Type::UNSUBSCRIBED => 'runUnsubscribedEvent',
        Type::CONVERSATION => 'runConversationEvent',
        Type::MESSAGE => 'runMessageEvent',
        Type::WEBHOOK => 'runWebhookEvent'
    ];
    private $buttonsFunctions = [
        'subscribeFromConversation' => 'runSubscribeFromConversation',
        'sharePhoneFromPc' => 'runSharePhoneFromPc',
    ];
    private $request_data;
    private $eventUserId;
    private $dbUserId;

    public function __construct()
    {
        $this->subscribersIds = [
            'fY91YK+fuBP1N3PD4XuowA==', // ISATEX Alex Kravchenko
            'FcVEfFC9lnzB5U7kiQqfZg==',  // ISATEX Valerii Horbarov
            '5rXsCiUCXYKCRejgU69Urg=='  // ISATEX Sales Office - 097 794 20 20
//            'fY91YK+fuBP1N3PD4XuowA==' // GF Alex Kravchenko
        ];
        $this->publicPath = 'viber://pa?chatURI=isatexsupport';//env('VIBER_BOT_PUBLIC_PATH');
//        $this->publicPath = 'viber://pa?chatURI=grandfamilysupport';//env('VIBER_BOT_PUBLIC_PATH');
        $this->apiKey = '4c6ff11ede800871-f185b58fced3553e-b06e05c03d8c8d99';// isatex
//        $this->apiKey = '4c766ec837c00e4e-a625a42563f633df-82eb58cf6cfe052e';// GF
        $this->client = $client = new Client([ 'token' => $this->apiKey ]);
        $this->companyName = 'Grand Family Support';//env('VIBER_CLINIC_NAME');
        $this->botSender = new Sender([
            'name' => $this->companyName,
//            'avatar' => 'https://dl-media.viber.com/1/share/2/long/vibes/icon/image/0x0/e2ce/e1dc95183afb33027174e63326272066f282ba8cac2deccbe6630ca7e824e2ce.jpg',//env('VIBER_AVATAR'),
            'avatar' => "https://{$_SERVER['SERVER_NAME']}/assets/images/ga.png",//env('VIBER_AVATAR'),
        ]);
        $this->colours = [
            'button_bg_dental' => '#2e97a9',
            'button_bg_red' => '#ff056d',
            'button_text_light' => '#FFFFFF',
            'button_text_dark' => '#000000'
        ];
        $this->bot = new Bot([ 'token' => $this->apiKey ]);
        $this->request_data = json_decode($this->bot->getInputBody(), 1);

        // log bot interaction
        $this->log = new Logger('bot');
        $this->log->pushHandler(new StreamHandler('bot.log'));

        $this->setEventUserId();
        $this->saveEventUserIdToDb();


    }

    public function run()
    {
        $this->bot
            ->on(function (Event $event) {
                $this->event = $event;
                return in_array(($this->request_data['event'] ?? null), $this->eventTypes);
            }, function (Event $event){
                $this->saveIncomeEventToDb();
                $this->log->info("processing: " . $event->getEventType());
                $eventFunction = $this->eventFunctions[$event->getEventType()] ?? null;
                if($eventFunction){
                    return $this->$eventFunction($event);
                }

                $this->log->info("can't process event: " . $event->getEventType());

                return null;
            })->run();
    }

    private function setEventUserId(){
        $this->eventUserId = 0;
        if(isset($this->request_data['user_id']))
            $this->eventUserId = $this->request_data['user_id'];
        if(isset($this->request_data['user']['id']))
            $this->eventUserId = $this->request_data['user']['id'];
        if(isset($this->request_data['sender']['id']))
            $this->eventUserId = $this->request_data['sender']['id'];
    }

    private function saveEventUserIdToDb(){

    }

    private function saveIncomeEventToDb(){
        $this->log->info("Income Event -> time[" . $this->event->getTimestamp() . "], viber_user_id['$this->eventUserId'], event[" . $this->event->getEventType() . "], data[" . json_encode($this->request_data, JSON_UNESCAPED_UNICODE) . "]");
    }

    private function saveOutcomeEventToDb($viber_user_id, $event, $data){
        $this->log->info("Outcome Event -> time[" . time() . "], viber_user_id['$viber_user_id'], event[" . $event . "], data[" . json_encode($data, JSON_UNESCAPED_UNICODE) . "]");
    }

    private function runMessageEvent(Event\Message $event){
        $this->log->info("processing: " . $event->getEventType() . " -> " . $event->getMessage()->getType());

        // шаринг контакта
        if($event->getMessage()->getType() === MessageType::CONTACT){
            $this->runMessageContactShareEvent($event);
        // если это клик на кнопку
        }else{
            preg_match('/^button:/', $event->getMessage()->getText(), $is_button);
            if($is_button){
                $button = explode(':', $event->getMessage()->getText())[1];
                $button_function = $this->buttonsFunctions[$button] ?? false;
                if($button_function){
                    $this->log->info("processing: " . $event->getEventType() . " -> " . $button_function);
                    $this->$button_function();
                }
            }
        }

    }

    private function runSubscribeFromConversation(){
        $this->runSubscribedEvent();
    }

    private function runSharePhoneFromPc(){
        $message = 'viber_error_save_contacts';
        $this->saveOutcomeEventToDb($this->eventUserId, 'systemOutcome', ['message' => $message]);

        $this->bot->getClient()->sendMessage(
            (new \Viber\Api\Message\Text())
                ->setSender($this->botSender)
                ->setReceiver($this->eventUserId)
                ->setText($message)
        );
    }

    private function runMessageContactShareEvent(Event\Message $event){
        $this->runSubscribedEvent();
    }

    private function runConversationEvent(Event\Conversation $event){
        $message = (new \Viber\Api\Message\Text())
            ->setSender($this->botSender)
            ->setMinApiVersion(3);

        $message_text = "Ваш ID: ".$this->eventUserId;
        $this->saveOutcomeEventToDb($this->eventUserId, 'systemOutcome', ['message' => $message_text]);
        $message->setText($message_text);

        $message->setKeyboard(
            (new \Viber\Api\Keyboard())
                ->setButtons([
                    (new \Viber\Api\Keyboard\Button())
                        ->setBgColor($this->colours['button_bg_red'])
                        ->setActionBody("button:subscribeFromConversation" )
                        ->setActionType('reply')
                        ->setSilent(true)
                        ->setText("<font color='{$this->colours['button_text_light']}'>Получать уведомления от {$this->companyName}</font>")
                ])
        );

        return $message;
    }

    // if user subscribe using subscribe button in chat information
    private function runSubscribedEvent(Event\Subscribed $event = null){
        $message_text = 'Ви дали згоду на отримання повідомлень від компанії'." {$this->companyName}";
        $this->saveOutcomeEventToDb($this->eventUserId, 'systemOutcome', ['message' => $message_text]);
        $this->bot->getClient()->sendMessage(
            (new \Viber\Api\Message\Text())
                ->setSender($this->botSender)
                ->setReceiver($this->eventUserId)
                ->setText($message_text)
        );
    }

    private function runUnsubscribedEvent(Event\Unsubscribed $event){

    }

    public function setWebHook(string $webhookUrl)
    {
        $this->client->setWebhook($webhookUrl, $this->eventTypes);
        echo "Webhook successfully changed to: $webhookUrl\n";
    }

    public function getAccountInfo()
    {
        return $this->client->getAccountInfo();
    }

    public function sendMessageToUser(string $message)
    {
        $contacts = $this->subscribersIds;
        if(!$contacts) return;

        foreach ($contacts as $viber_user_id){
            $this->saveOutcomeEventToDb($viber_user_id, 'systemOutcome', ['message' => $message]);
            $this->bot->getClient()->sendMessage(
                (new \Viber\Api\Message\Text())
                    ->setSender($this->botSender)
                    ->setReceiver($viber_user_id)
                    ->setText($message)
            );
        }
    }


    private function runDeliveredEvent(Event\Delivered $event)
    {

    }

    private function runSeenEvent(Event\Seen $event)
    {

    }

    private function runFailedEvent(Event\Failed $event)
    {

    }

    private function runWebhookEvent(Event\Webhook $event)
    {

    }

}
