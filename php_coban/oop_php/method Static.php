<?php

    class nguoidung {
        public static $ten = "tên user";
        public $ho;

                                  // STATIC

          static function set_ten($ten = "tên hiển thị2"){
                self::$ten = $ten; // self :  chính là bản thân class;
            }
           static function get_ten(){
                    return nguoidung::$ten;
            }
            static function all($ten){
                    self::set_ten($ten);
              return self::get_ten();

            }
    }
                     // khởi tạo class kiểu truyền thống
    $user = new nguoidung();
    $user->set_ten("tên của user nè");
    echo $user->get_ten();

                            echo"<hr>";

                     //khởi tạo kiểu static
//         nguoidung::set_ten("tên của user haha");
    echo nguoidung::get_ten();
    echo nguoidung::all("loc1223");

//$nguoidung = new nguoidung();
//       $nguoidung->set_ten("loc");
// echo  $nguoidung->get_ten();
//
//$nguoidung = new nguoidung();
////$nguoidung->set_ten("loc2");
//echo  $nguoidung->get_ten();

