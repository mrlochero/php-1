<?php
                         // BIẾN
1. BIẾN : $ten_bien = "value";
2. hằng : define("tên_hằng","giá trị",true)
    // hằng ko thể thay đổi giá trị, truyền true để ko phân biệt in hoa;



                        // TRUY CẬP
1. toàn cầu : $GLOBALS; // truy cập mọi phạm vi;

2.  LẤY dữ liệu : $_POST : ẩn thông tin;
                  $_GET : hiện thông tin trên thanh url ;
              $_REQUEST LẤY giá trị của cả $_POST và $_GET;

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
    file_exists($bien) : ktra file tồn tại ->true;

                    //I : hàm xử lý chuỗi :
1. strlen(); //đếm chuỗi;
2. str_word_count(); // đếm từ trong chuỗi;
3. strrev(); // đảo ngược chuỗi;
4. strpos(" văn bản","đoạn văn bản muốn tìm") //; tìm vị trí xuất hiện đầu tiên;
5.str_replace("từ bị thay","từ muốn thay","văn bản gốc");
6. lọc chuỗi : $lochuoi = filter_var($string, FILTER_SANITIZE_STRING);


                     //II HÀM XỬ LÝ INT (SÔ NGUYÊN )
1. LỌC int : if(filter_var($int, FILTER_VALIDATE_INT)){
                echo " là số nguyên";
}



        // II kiểm tra php
1. echo // xuất ra màn hình;
2.var_dump(); //kiểm tra dữ liệu;
3. print_r(); //xuất ra màn hình (chủ yếu dùng in array)
        vd :  echo " <pre> ";
              echo print_r("");
              echo "</pre>";
4. count() : // đếm số phần tử trong array;
5.isset() : biến tồn tại trả về true;
6.empty() : biến ko tồn tại trả về true;
    6.1 6// 6 trường hợp trả về true nếu biến mang giá trị : 0, "0" , NULL ,", FALSE.
            //và biến không tồn tại


            //III các loại dữ liệu trong PHP ( 8 kiểu )
1. STRING // chuỗi;
2. interger - INT // số;
3.float // số thực ( số dư );
4.boolen // true,false;
5.array // mảng;
6.object //
7.null// rỗng;
8. resource // nơi lưu trữ tài nguyên bên ngoài



             //III toán tử
1. số học;  + , - , * , / , % ; //"như toán bình thường";
            ++ : //tăng 1 đơn vị; ++ đứng trk sẽ tăng ngay lập tức
                    // vd : $a = 1 ; ++$a = 2 ; thực thi ngay
                        //   a++ thực thi sau khi gọi $a 1 lần nx;
            -- : // giảm 1 đơn vị; ++ đứng trk sẽ giảm ngay lập tức

2. toán tử gán : = ,+= , -= , *= , /= , %= ;
  2.1 vd : $a = 100;
            $a += 200; echo $a; // $ a = 300;


 3. toán tử so sánh :   ==  // so sánh bằng;
                        === // so sánh bằng (sskld) ;
                        != // so sánh khác nhau;
                        !==// so sánh khác nhau (sskdl);

                         > //lớn hơn;
                         >= // lớn hơn hoặc bằng ;
                         >== // lớn hơn hoặc bằng(sskdl) ;

                          < // bé hơn;
                          <= // bé hơn hoặc bằng;
                          <== // bé hơn hoặc bằng(sskdl);

            //chú thích : (sskdl) :so sánh cả kiểu dữ liệu;

4. //toán tử logic (điều kiện) :
        && , and : // cả hai vế đều đúng -> true;
        || , or : // 1 trong hoặc cả 2 vế đúng -> true;
        xor : //1 vế đúng thì true cả 2 vế đúng thì false;
        !  : //phủ định true -> flase; flase -> true;
5.


                    //IV câu điều kiện
    1. if else elseif :
        1.a if("điều kiện"){
             //điều kiện true sẽ nhảy vào đây;
        }
        1.b  elseif("điều kiện") {
             // đk if(flase) sẽ nhảy vào đây nếu elseif(true);
            // sẽ chỉ nhảy vào 1 elseif(true) nào đừn trk;
        }
        2.c else{
            // elseif(flase) và elseif(flase) sẽ nhảy vào đây;
        }


    2. switch case :
        2.1 switch ("dữ liệu cần ktra") {
            case "dữ liệu ktra";
            echo "sẽ chạy trong khối này nếu dữ liệu true";
            break; //thoát khỏi block;
}

               // VÒNG LẶP:
1. for ($i = 0 ; $i <= 10 ; $i++) {
         echo $i
}

2.  while :
    $i = 1 ;
          while ($i) {
                echo $i ;
                $i++ ;
          }// khác cú pháp với for;
3. do while :
    $i = 1;
          do{
              echo $i;
              $i++;
          }while($i>10)// chạy ít nhất 1 lần rồi mới ktra đk;

4. foreach // dùng để duyệt mảng;

    // duyệt value
    foreach($ten as $value) {
        echo $value;
    }
     //duyệt cả key và value
    foreach ($ten as $key=>$value) {
        echo $key;
        echo $value;
    }

                            //IV FUNCTION - HÀM
1. function tên_hàm(tham số1 = gán gtri mặc định, tham số2...) {

}
       // gọi hàm
    tên_hàm(đối số1, đối số2...) --> có thể gọi chung là tham số;
2. return : //trả về giá trị của function;
            // hàm ko return sẽ trả về undefined;
            // dòng dưới return trong cùng function sẽ ko chạy;
3. hiểu hơn về hàm;
// biến,hàm,... định nghĩa trong function sẽ có phạm vi sử dụng trong fuction đó - tính private;
4. các loại hàm;
   4.1 declaration fuction : được hosting
            vd: function showmessger(){}
   4.2 expression fuction : ko có hosting
            vd: $showmessger = function(){}
            vd: $showmessger = function showmessger2(){}


                                  //VII ARRAY - MẢNG
1.tạo mảng :
 1.1 c1 : $array_1 = array("key1"=>"value1","key2"=>"value2");
     c2 :  $array_2 = ["key1"=>"value1","key2"=>"value2"];
     // array với số key tự tăng start từ số 0:
    $array = ["value1", "value2",...];
              array[0] --> "value1";
     // Thêm phần tử vào mảng
       $bienmang[index] = $giatri;   // thêm vào phần tử với chỉ số index, phần tử nếu là mới
                                    // thêm sẽ nằm cuối, dù giá trị index bao nhiêu
       $bienmang[] = $giatri;       // thêm vào cuối phần tử mới, chỉ số phần tử này bằng chỉ số lớn nhất cộng 1
                                    // nếu đây là phần tử đầu tiên của mảng thì chỉ số sẽ là 0 ;
                                    // nếu trùng index-key sẵn thì sẽ gắn lại giá trị
2. làm việc với array :
  2.1 hiển thị array dùng hàm : print_r(); //xuất ra màn hình (chủ yếu dùng in array)
                            vd :  echo " <pre> ";
                                  echo print_r();
                                  echo "</pre>";

  2.2 lấy độ dài : count($ten_array);
  2.3 xóa phần tử : unset($array[0]);
  2.4 sắp xếp array:
                - tăng dần : sort();
                - giảm dần : rsort();
  2.5 đổi dạng string -> array: explode(dấu ngăn cách,$bien);
     vd: $a = "18/11/1999";
          $b = explode("/",$a);

  2.5 đổi dạng  array-> string : implode("ký tự phân cách".$bien_array);
        vd: $a = [18,11,1999];
            $b = implode("/",$a);

            // VIII CÁC HÀM XỬ LÝ
1. CHUYỂN TRANG : header('location: tentrang.php');



                // XV tạo thời gian
1. date("d/m/Y");
 1.1 giờ : date("h:i:sa"); // H in hoa 24h , h 12h;

                // X - COOKIE
    $cookie_name = "loc";
    $value_cookie = "123456789";
1. setcookie($cookie_name, $value_cookie,time()+(86400),"/");
                                         time xóa cookie(86400 = 30 ngày);
     Tất cả Cookie được lưu trữ trong biến toàn cục $_COOKIE
    nên để lấy giá trị Cookie ta dùng cú pháp sau: $bien = $_COOKIE[$cookie_name];
 1.2 sửa cookie :  sửa trên biến;

                // XI - SESSON
1. tạo TRƯỚC        session_start(); -> bắt buộc;
1.1 tạo : $_SESSION["NAME"] = "VALUE";
1.2 xóa : unset($_SESSION["name"]);
    xóa tất cả session : session_destroy();

                                        //lọc dữ liệu
1. lọc,kiểm tra IP :      filter_var($ip, FILTER_VALIDATE_IP);
2. lọc email từ chuỗi sang gmail :   filter_var($email,FILTER_SANITIZE_EMAIL);
    ktra : filter_var($email , FITER_VALIDATE_EMAIL);
3. lọc, ktra URL : filter_var($url,FILTER_VALIDATE_URL);
4. lọc,ktra chuỗi : $lochuoi = filter_var($string, FILTER_SANITIZE_STRING);
6. lọc chuỗi : $lochuoi = filter_var($string, FILTER_SANITIZE_STRING);
7  LỌC, ktra int(số) : filter_var($int, FILTER_VALIDATE_INT);




