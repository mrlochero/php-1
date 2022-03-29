<?php

class Nguoidung
{
    public static $ten = "người dùng";
    public $ho;

    // STATIC

    static function set_ten($ten = "người dùng")
    {
        self::$ten = $ten; // self :  chính là bản thân class;
    }

    static function get_ten()
    {
        return nguoidung::$ten;
    }

    static function all($ten)
    {
        self::set_ten($ten);
        return self::get_ten();

    }
}
