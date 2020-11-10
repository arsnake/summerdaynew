<?php

require_once 'Template.php';

class CallbackForm
{
    public static function getRecallHtml($form){
        return Template::view(['formName' => $form], 'page_parts/templates/callback-form.html');
    }
}