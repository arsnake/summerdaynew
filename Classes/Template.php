<?php

class Template
{

    private static $_vars = array();

    private static function _set($var, $value = '')
    {
        if (is_array($var)) {
            $keys = array_keys($var);
            $values = array_values($var);
            self::$_vars = array_merge(self::$_vars, array_combine($keys, $values));
        } else {
            self::$_vars[$var] = $value;
        }

    }

    public static function view($data = [], $layout = FALSE)
    {
        if(!$layout){
            return null;
        }

        foreach ($data as $vars => $values)
            self::_set($vars, $values);

        extract(self::$_vars, EXTR_OVERWRITE);

        ob_start();
        include $layout;
        $view = ob_get_contents();
        ob_end_clean();

        self::$_vars = NULL;

        return $view;
    }

}
