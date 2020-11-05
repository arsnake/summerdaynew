<?php

class Menu
{
    public static function getHtml($menuLinks){
        $menu = '<ul>';
        foreach($menuLinks as $menuLink){
            $active_class = ($menuLink['href'] === $_SERVER['REQUEST_URI']) ? 'active' : '';
            $has_child_class = isset($menuLink['submenu']) ? 'has-child' : '';
            $target = isset($menuLink['target']) ? "target='_blank'" : '';

            $menu .= "<li class='$has_child_class'>
                <a href='{$menuLink['href']}' class='$active_class' $target>{$menuLink['name']}</a>";
            if($has_child_class){
                $menu .= self::getHtml($menuLink['submenu']);
            }
            $menu .= "</li>";
        }
        $menu .= '</ul>';
        return $menu;
    }
}