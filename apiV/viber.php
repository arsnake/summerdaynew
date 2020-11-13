<?php
require_once '../Classes/Viber.php';

try {
    $viber = new viber();
    if(isset($_GET['set_webhook'])) {
        $viber->setWebHook($_GET['set_webhook']);
    }else{
        $viber->run();
    }
} catch (Exception $e) {
    exit();
//    echo "Error: ". $e->getMessage() ."\n";
}