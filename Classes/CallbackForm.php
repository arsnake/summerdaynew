<?php

require_once 'Template.php';

class CallbackForm
{
    public static function getHtml($formName, $title = ''){
        return Template::view(['formName' => $formName, 'title' => $title], 'page_parts/templates/callback-form.html');
    }
}