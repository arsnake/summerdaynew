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
            'callCenterEmail' => 'sasha_kravchenko_@ukr.net',
            'systemMessagesEmail' => 'alex@msoft.ua',
        ];

        return isset($config[$param]) ? $config[$param] : null;
    }

    function sendRequestCall(){
        $message = "Заявка на звонок с формы {$_POST['formName']}. Контакт: {$_POST['userContact']}";
        $title = 'Test mailing from form';

        Mail::sendMail(env('callCenterEmail'), $title, env('systemMessagesEmail'), $message);
//        Viber::sendMessage(env('callCenterViberUser'), $message);

    }



    // вызываю запрашиваемую аяксом функцию
    $func = $_POST['func'];
    $data = $func();

    echo $data;
}
