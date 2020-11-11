<?php

require_once 'Template.php';

class CallbackModal
{
    public static function getHtml($formName, $title = ''){
        $formHtml = Template::view(['formName' => $formName, 'title' => $title], 'page_parts/templates/callback-form.html');
        return Template::view(['formName' => $formName, 'title' => $title, 'formHtml' => $formHtml], 'page_parts/templates/callback-modal.html');
    }
}