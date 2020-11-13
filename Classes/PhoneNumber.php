<?php
class PhoneNumber
{

    public static function normaliseUAPhone(string $phone)
    {
        if($phone){
            return preg_replace('/(^\s?\+?\s?3?\s?8?\s?)|\s|-|\(|\)/', '', $phone);
        }
        return null;
    }

    public static function normaliseUAHomePhone(string $phone)
    {
        if($phone){
            return preg_replace('/\s|-|\(|\)/', '', $phone);
        }
        return null;
    }

}