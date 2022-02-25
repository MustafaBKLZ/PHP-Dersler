<?php

class FormatCheckerSystem
{
    public function TextBlankChecker($text) // Sadece Harf ve Boşluk içerebilir. Kullanım İsim 
    {
        if (!preg_match("/^[a-zA-Z-şüğöıç ]*$/", $text)) {
            return false;
        } else {
            return true;
        }
    }
    public function JustTextChecker($text) // Sadece Harf içerebilir. Kullanım Soyisim 
    {
        if (!preg_match("/^[a-zA-Zşüğöıç]*$/", $text)) {
            return false;
        } else {
            return true;
        }
    }
    public function LetterNumberChecker($text) // Sadece Harf, Sayı ve nokta içerebilir. Kullanım KullanıcıAdı
    {
        if (!preg_match("/^[a-z0-9.]+$/i", $text)) {
            return false;
        } else {
            return true;
        }
    }
    public function JustNumberChecker($text) // Sadece Rakam içerebilir. Kullanım Fiyat, Yıl vs. 
    {
        if (!preg_match("/^[0-9]*$/", $text)) {
            return false;
        } else {
            return true;
        }
    }
    public function URLChecker($text)
    {
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $text)) {
            return false;
        } else {
            return true;
        }
    }
    public function EmailChecker($text)
    {
        if (!filter_var($text, FILTER_VALIDATE_EMAIL)) {            
            return false;
        } else {
            return true;
        }
    }
}
