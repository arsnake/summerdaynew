<?php

require_once 'Template.php';

class CallbackModalButton
{
    public static function getHtml($modalId){
        return Template::view(['modalId' => $modalId], 'page_parts/templates/callback-modal-button.html');
    }
}