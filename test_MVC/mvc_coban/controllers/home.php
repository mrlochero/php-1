<?php
class Home extends Controller{
    static function sayhi()
    {
      $teo = self::model("sinhvienmodel");
      echo $teo->getsv();
    }

    static function show($a = 1, $b = 0)
    {
        // MODEL
       $teo = self::model("sinhvienmodel");// require
       $tong = $teo->tong($a, $b);

       // VIEW
       self::views("aodep", [
           "number" =>$tong,
           "color-red" => "red",
           "page1" => "page1",
           "page2" => "page2",
       ]);
    }
}