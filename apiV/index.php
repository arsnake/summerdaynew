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
        $message = "Заявка на звонок: {$_POST['formTitle']}. Контакт: {$_POST['userContact']}";
        $title = $message;

        $request_targets = env('callCenterEmails');
        $send_from_address = env('systemMessagesEmail');
        if($request_targets){
            foreach ($request_targets as $send_to_address){
                echo 1;
                Mail::sendMail($send_to_address, $title, $send_from_address, $message);
                echo 2;
            }
        }
//        Viber::sendMessage(env('callCenterViberUser'), $message);

    }



    // вызываю запрашиваемую аяксом функцию
    $func = $_POST['func'];
    $data = $func();

    echo $data;
}
