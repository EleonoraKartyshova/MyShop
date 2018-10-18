<?php
/**
 * Created by PhpStorm.
 * User: eleonora
 * Date: 03.10.18
 * Time: 23:13
 */

namespace Shop;


class Validator
{
    public static function clean($data = "") {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public static function email($data)
    {
        if (preg_match("/[a-zA-Z0-9]{2,}+@[a-zA-Z0-9]{2,}+\.[a-zA-Z]{2,5}$/m", $data)) {
            return true;
        } else {
            return false;
        }
    }
    public static function password($data)
    {
        if (preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}/m", $data)) {
            return true;
        } else {
            return false;
        }
    }
    public static function phone_number($data)
    {
        if (preg_match("/[0-9]{5,13}/m", $data)) {
            return true;
        } else {
            return false;
        }
    }
    public static function search($data)
    {
        if (preg_match("/[a-zA-Z0-9\ ]{3,}$/m", $data)) {
            return true;
        } else {
            return false;
        }
    }
    public static function text_review($data)
    {
        if (preg_match("/[0-9a-zA-Z\_\.\-\!\?\,\=\+\'\ ]{2,300}/m", $data)) {
            return true;
        } else {
            return false;
        }
    }
}