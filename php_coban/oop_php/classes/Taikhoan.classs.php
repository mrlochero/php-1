<?php

class Taikhoan
{
    public static $ten = "tk user";
    public $ho;

    // STATIC

    static function set_ten($ten = "tên hiển thị2")
    {
        self::$ten = $ten; // self :  chính là bản thân class;
    }

    static function get_ten()
    {
        return self::$ten;
    }

    static function all($ten)
    {
        self::set_ten($ten);
        return self::get_ten();

    }
}