<?php

class Mail
{

//--------------------------------------------------------------------------------------------------------
//-------------------------------функция отправки письма--------------------

    public static function sendMail($to, $subj, $from, $message)
    {

        $charset = 'utf8';//кодировка письма
        $subj = self::subj_encode($subj, $charset);//кодируем поле "Тема"
        $header = "MIME-Version: 1.0\r\n";
        $header .= "X-Mailer: PHPMail Tool\r\n";
        $head = "X-Sender: $from\r\n";
        $header .= "X-Priority: 3\r\n";//приоритет


        $boundary = "------"; /* задать разделитель файлов */
        $header .= "From: $from\n";
        $header .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";
        $body = "";
        $body .= "--$boundary\n";
        $body .= "Content-Type: text/html; charset=$charset\r\n";
        $body .= "Content-Transfer-Encoding: 8bit\r\n\n";
        $body .= "$message\r\n";

        //Перечисляем все загруженые файлы и создаем для каждого отдельный Header.........

        if (isset($_FILES['upload']['tmp_name'])) {
            for ($i = 0; $i < sizeof($_FILES['upload']['tmp_name']); $i++) {
                $body .= self::attach($_FILES['upload']['tmp_name'][$i], $_FILES['upload']['name'][$i], $boundary); /* для каждого элемента массива (каждого файла) вызвать функцию обработки */
            }
        }


        $body .= "--" . $boundary . "--\n"; /* добавление двух дефисов ДО и ПОСЛЕ для закрывающего разделителя ОБЯЗАТЕЛЬНО! */

        //	echo"TO:".$to."<br />".$subj."<br />".$body."<br />".$header;
        if (mail($to, $subj, $body, $header)) {
            return ("Письмо отправлено.");

        } else {
            return ("Произошла ошибка при отправке письма.");
        }
    }

//--------------------------------------------------------------------------------------------------------
//-------------------------------функция обработает каждый файл--------------------

    private static function attach($tmp_name, $name, $boundary)
    {

        //GLOBAL $boundary; /* определить что, эти переменные берутся из глобальных (ранее определенных), а не создаются локально (фишка PHP) */
        @$file = fopen($tmp_name, "rb"); /* открыть файл */

        $text = fread($file, filesize($tmp_name)); /* считать весь в переменную */
        fclose($file); /* закрыть */
        $body = "--$boundary\n"; /* добавление двух дефисов ОБЯЗАТЕЛЬНО! */
        $body .= "Content-Type: application/octet-stream; name==?utf-8?B?" . base64_encode($name) . "?=\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "Content-Disposition: attachment; filename==?utf-8?B?" . base64_encode($name) . "?=\r\n\n";
        $body .= chunk_split(base64_encode($text)) . "\n"; /* закодировать полученное из файла и добавить в тело письма */

        return $body;
    }

//--------------------------------------------------------------------------------------------------------
//-------------------------------Функциия кодирует тему письма--------------------

    private static function subj_encode($str, $data_charset, $send_charset = false)
    {

        # Если задана кодировка передачи и она не совпадает
        # с кодировкой данных, конвертируем строку
        if ($send_charset AND $data_charset != $send_charset)
            $str = iconv($data_charset, $send_charset, $str);
        else
            $send_charset = $data_charset;
        return '=?' . $send_charset . '?B?' . base64_encode($str) . '?=';
    }

//--------------------------------------------------------------------------------------------------------
//------------------------------- функция отправки запрашиваемиого файла с сервера на почту --------------------

    public function sendFileFromServer($file_dir, $file_name, $to, $title = NULL, $mess = NULL)
    {

        $domain_name = $_SERVER['SERVER_NAME'];
        $file = $file_dir . $file_name;

        if (!$title) $title = "Отправка файлов с сайта $domain_name";
        else        $title .= " " . $domain_name;

        // формирую сообщение, обрабатывая поля  fio, age, country, phone, email, sphere, mess
        $message_header = "<b>$title</b><br />";
        $css = "<style></style>";
        $mess = "<span class='list_name'>Повідомлення:</span><span class='list_value'>" . $_POST["mess"] . "</span><br />";


        $message_text = $message_header . $css . $mess;


        $subject = $title; //Тема письма
        $hash = md5(date('r', time())); //Хэш для формирования письма
        $headers = "From: info@{$domain_name}\nReply-To: info@{$domain_name}\nMIME-Version: 1.0"; //Заголовочки
        $headers .= "\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-" . $hash . "\"\n\n"; //еще заголовочки
        $attachment = chunk_split(base64_encode(file_get_contents($file))); //Готовим файл к отправке     
        $message = '--PHP-mixed-' . $hash . "\n"; //Начало письма
        $message .= 'Content-Type: text/html; charset="utf-8"' . "\n"; //Пойдет html с текстом
        $message .= 'Content-Transfer-Encoding: 8bit' . "\n\n"; //Заголовочек
        $message .= $message_text . "\n"; //Сам текст
        if (file_exists($file)) {
            $message .= '--PHP-mixed-' . $hash . "\n"; //Закончили блок
            $message .= 'Content-Type: application/octet-stream; name="' . $file_name . '"' . "\n"; //Начали блок с файлом
            $message .= 'Content-Transfer-Encoding: base64' . "\n"; //Заголовок
            $message .= 'Content-Disposition: attachment' . "\n\n"; //Заголовок
            $message .= $attachment . "\n"; //Сам файл
        }

        $mail_sent = @mail($to, $subject, $message, $headers); //Отсылаем письмо

        return $mail_sent;

    }


}