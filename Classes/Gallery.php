<?php

class Gallery
{
    public static function getSlidesHtml($images_dir, $expand_group = ''){
        $allowed_types = ["jpg", "png", "gif", "webp"];  // разрешеные типы изображений
        $dir_handle = @opendir($images_dir) or die("Ошибка при открытии папки !!!"); // пробуем открыть папку
        $slides_html = '';
        $files = [];

        while ($file = readdir($dir_handle))    // поиск по файлам
        {
            if($file === "." || $file === ".."){
                continue;  // пропустить ссылки на другие папки
            }

            $file_parts = explode(".",$file);          // разделить имя файла и поместить его в массив
            $ext = strtolower(array_pop($file_parts));   // последний элеменет - это расширение

            if(in_array($ext,$allowed_types))
            {
                $files[] = $file; // put in array.
            }

        }
        closedir($dir_handle);  //закрыть папку

        natsort($files); // sort.


        foreach ($files as $file)
        {
            $file_parts = explode(".",$file);          // разделить имя файла и поместить его в массив
            //$slides_html .= "<a data-fancybox='$expand_group' data-caption='' href='$images_dir/$file'><img class='owl-lazy' data-src='$images_dir/$file' class='item' title='$file' /></a>";
            $file .= '?v=2';


            $slides_html .= "<a data-fancybox='$expand_group' data-caption='' href='$images_dir/$file'><span class='owl-lazy' data-src='$images_dir/$file'></span></a>";

        }

        return $slides_html;
    }
}