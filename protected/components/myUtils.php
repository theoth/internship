<?php

class myUtils {

    public static $salt = 'nkl(*^Goh*(';
    public static $salt2 = 'ljik*^&jv(&^';

    public static function genCrypt() {
        return sha1(self::$salt2 . uniqid() . self::$salt);
    }

    public static function sendEmail($name, $subject, $body, $receiverEmail) {


        if (!YII_DEBUG)
            return self::myMail($name, $subject, $receiverEmail, $body);
        else {
            var_dump($receiverEmail);
            var_dump($subject);
            var_dump($body);
            return true;
        }
    }

    public static function myMail($name, $subject, $email, $body) {

        $name = '=?UTF-8?B?' . base64_encode($name) . '?=';
        $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $headers = "From: $name <{$email}>\r\n" .
                "Reply-To: {$email}\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/html; charset=UTF-8";

        mail(Yii::app()->params['adminEmail'], $subject, $body, $headers);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

