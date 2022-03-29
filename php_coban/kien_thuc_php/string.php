<?php

                            //  STRING : chuỗi
1.1 strlen($string); //đếm chuỗi;
1.2 str_word_count($string); // đếm từ trong chuỗi;
1.3 strrev($string); // đảo ngược chuỗi;
1.4 strpos(" văn bản","đoạn văn bản muốn tìm") //; tìm vị trí xuất hiện đầu tiên;
1.5.str_replace("từ bị thay","từ muốn thay",$str);
1.6 lọc chuỗi : $lochuoi = filter_var($string, FILTER_SANITIZE_STRING);
1.7 (string)$bien : //ép dữ liệu sang kiểu chuỗi ;


+ addcslashes ($str, $char_list) : thêm dấu gạch chéo (\) đằng trước những ký tự trong chuỗi $str
                                    mà ta liệt kê ở $char_list.
    vd : // a..zA..Z là gồm các từ từ a => z và A => Z
            echo (addcslashes('freetuts.net FREETUTS.NET', 'a..zA..Z'));

// string ->  array
+ explode ( $delimiter , $string) :
         chuyển một chuỗi $string thành một mảng số nguyên
         các phần tử với ký tự tách mảng là $delimiter.
// lặp
+ str_repeat(  $str,  int $n  )
            Hàm này lặp chuỗi $str $n lần.
+ md5($str)
Hàm này mã hóa chuỗi thành một dãy 32 ký tự (mã hóa md5).

// string -> html
+ htmlentities($str)
+ htmlspecialchars( $str)
        html trong $str sẽ ko còn tác dụng.

+ html_entity_decode($string)
+ htmlspecialchars_decode($str)
        chuyển ngược các $str dạng thực thể HTML.

+ strip_tags( $string, $allow_tags )
  Hàm này bỏ các thẻ html trong chuỗi $string được khai báo ở $allow_tags.
vd : echo strip_tags('<b>freetuts.net</b>', 'b');

// lấy
+substr( $string,  $start, $length )
    Hàm này lấy một chuỗi con nằm trong chuỗi $str
    bắt đầu từ ký tự thứ $start và chiều dài $length.
    vd : echo substr( 'freetuts.net',  0, 8);
                        // Kết quả freetuts
// tìm kiếm
+ strpos($str, $chuoi_tim )
Tìm vị trí của chuỗi $chuoi_tim trong chuỗi $str,
kết quả trả về int.
// Xóa
+ trim($string, $ky_tu);
Xóa ký tự $ky_tu nằm ở đầu và cuối chuỗi $str
nếu ta không nhập $ky_tu thì mặc định nó hiểu là xóa khoảng trắng.

// chuyển đổi
+ strtolower($str);
   Chuyển tất cả các ký tự chuỗi $str sang chữ thường
+ strtoupper($string );
   Chuyển tất cả các ký tự chuỗi $str sang chữ hoa
+ ucfirst( $string )
   Chuyển ký tự đầu tiên chuỗi $string sang chữ hoa
+ ucfirst( $string
   Chuyển ký tự đầu tiên trong chuỗi $string sang thường
+ ucwords( $string )
   Chuyên từ đầu tiên trong chuỗi $string sang chữ hoa

    // JSON
+ json_encode($array_or_object)
  Chuyển một mảng hoặc mội đối tượng (classs) sang chuỗi dạng JSON
