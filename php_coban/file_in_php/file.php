<?php
                                      // file
1. gộp file :
    1.1 require "ten_file" hoặc include "ten_ file" có thể import nhiều lần;
    1.2 require_one "ten_file" hoặc include_one: chỉ import đúng một lần gộp 1 file duy nhất;
                // nếu chương trình bị lỗi thì lập tức trình biên dịch sẽ dừng và xuất ra thông báo lỗi
                // còn include sẽ chỉ là một cảnh báo nên chương trình vẫn chạy cho đến cuối chương trình.

2. đọc file :
    2.a   readfile("tên file");

    2.b   $mylife = fopen("ten_file" , "r") or die ("lỗi"); // mở file ,
//                                     "r" -> chỉ có quyền đọc file;
//                                     "w" -> tạo file mới;
//                                     "a" -> viết thêm vào file; vd: dùng hàm fwrite($myfile ,"viet_them");
//                                     "w" -> viết đè vào file; vd: dùng hàm fwrite($myfile ,"viet_them");

                    echo fread($myfile, filesize("ten_file")); // -> đọc file;
                    fclose($myfile); -> " đóng file";

    2.c  đọc 1 dòng:  fgets($mylife);
                vd: dùng vòng lặp while với file :
        while(!feof($mylife)) {
            echo fgets($mylife) . "</br>";// -> in từng dòng
        }
    hàm feof() : kiểm tra xem con trỏ tập tin đã ở vị trí cuối cùng của file chưa;
3. up file : $_FILES["TÊN TẬP TIN"];

}