<?php

        class TaiKhoan{
            public $ten;
            public $ho;
            private $password;
            protected $password2;

            function __construct($t,$h){
                $this->ten = $t;
                $this->ho = $h;
            }
                    // GẮN GIÁ TRỊ CHO PRIVATE
                    function set_password($p){
                        $this->password = $p;
                    }
                    // LẤY GIÁ TRỊ PRIVITE
                    function  get_password(){
                        return $this->password;
                    }
                            // TẠO GIÁ TRỊ PROTECTED
                            function set_password2($p2){
                                $this->password2 = $p2;
                            }
                            // lấy giá trị Protected
                            function get_password2(){
                                return $this->password2;
                            }
        }

            // TẠO CLASS KẾ THỪA  extends
            class Taikhoan_2 extends TaiKhoan {

                // tạo , LẤY GIÁ TRỊ PUBLIC : dùng chính hàm của class kế thừa

                // PRIVATE SẼ KHÔNG ĐƯỢC KẾ THỪA VÌ TÍNH CHẤT RIÊNG TƯ ( BẢO MẬT );

                // tạo , LẤY GIÁ TRỊ PROTECTED : dùng chính hàm của class kế thừa
            }
        }

            class Taikhoan_3 extends Taikhoan {

            }
        $user1 = new TaiKhoan_3("loc","admin");
         echo  $user1->set_password2("123456");
         echo $user1->get_password2("123456");
//


