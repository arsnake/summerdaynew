<?php
// session_start();

if(!$_POST){
    $php_input = json_decode(file_get_contents("php://input"), true);
    if(!empty($php_input)){
        $_POST = $php_input;
    }
}

// если не передали требуемую для исполнения функцию
if(!isset($_POST['func']) || !$_POST['func']){
    echo '404';
    http_response_code(404);
    exit();

// если в сессии нету данных про пользователя || или его роли
} else {

    require_once '../Classes/Mail.php';
    require_once '../Classes/Viber.php';

    function env($param){
        $config =  [
            'callCenterEmails' => [
//                'sales@summer.day.ua'
                'sasha_kravchenko_@ukr.net'
            ],
            'systemMessagesEmail' => 'sales@summer.day.ua',
        ];

        return isset($config[$param]) ? $config[$param] : null;
    }

    function sendRequestCall(){
        $messages = [
            "footerCallback" => "Доброго дня, мене зацікавила нерухомість. Зателефонуйте мені за номером, будь ласка: ",
            "apartments26" => "Доброго дня. Я хочу придбати квартиру 26 кв. м. у Grand Family Apartments. Зателефонуйте мені, будь ласка: ",
            "apartments49" => "Доброго дня. Я хочу придбати квартиру 49 кв. м. у Grand Family Apartments. Зателефонуйте мені, будь ласка: ",
            "village65" => "Доброго дня. Я хочу придбати котедж Аквамарин у Grand Family Village. Зателефонуйте мені, будь ласка: ",
            "village91" => "Доброго дня. Я хочу придбати котедж Онікс у Grand Family Village. Зателефонуйте мені, будь ласка: ",
            "village55" => "Доброго дня. Я хочу придбати котедж Смарагд у Grand Family Village. Зателефонуйте мені, будь ласка: ",
        ];

        $form_name = $_POST['formName'];

        if(isset($messages[$form_name])){
            $message = $messages[$form_name]. $_POST['userContact'];
        }else{
            $message = "Заявка: {$_POST['formTitle']}. Контакт: {$_POST['userContact']}";
        }

        $title = $message;

        $request_targets = env('callCenterEmails');
        $send_from_address = env('systemMessagesEmail');
        if($request_targets){
            foreach ($request_targets as $send_to_address){
                Mail::sendMail($send_to_address, $title, $send_from_address, $message);
            }
        }

        $viber = new viber();
        $viber->sendMessageToUser($message);
    }

    function sendSubscribe(){
        $message = "Підписка на новини та акції: {$_POST['userContact']}";
        $viber = new viber();
        $viber->sendMessageToUser($message);
    }



    // вызываю запрашиваемую аяксом функцию
    $func = $_POST['func'];
    $data = $func();

    echo $data;
}
