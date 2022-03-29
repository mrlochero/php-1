<?php

                            4.// ARRAY - MẢNG
// các loại mảng :
- Mảng số nguyên : +  mảng có chỉ mục ở dạng số
- Mảng liên hợp : + mảng với chỉ mục ở dạng chuỗi kí tự
- Mảng đa chiều : + Một mảng chứa một hoặc nhiều mảng.

4.1tạo mảng :
 4.1a - c1 : $array_1 = array("key1"=>"value1","key2"=>"value2");
      - c2 :  $array_2 = ["key1"=>"value1","key2"=>"value2"];
     // array với số key tự tăng start từ số 0:
    $array = ["value1", "value2",...];
              array[0] --> "value1";

     // Thêm phần tử vào mảng
       $bienmang[index] = $giatri;   // thêm vào phần tử với chỉ số index, phần tử nếu là mới
                                    // thêm sẽ nằm cuối, dù giá trị index bao nhiêu
       $bienmang[] = $giatri;       // thêm vào cuối phần tử mới, chỉ số phần tử này bằng chỉ số lớn nhất cộng 1
                                    // nếu đây là phần tử đầu tiên của mảng thì chỉ số sẽ là 0 ;
                                    // nếu trùng index-key sẵn thì sẽ gắn lại giá trị
4.2 làm việc với array :
  4.2a - hiển thị array dùng hàm : print_r(); //xuất ra màn hình (chủ yếu dùng in array)
                            vd :  echo " <pre> ";
                                  echo print_r();
                                  echo "</pre>";

   - lấy độ dài : count($ten_array);
   - xóa phần tử : unset($array[0]);
   - sắp xếp array:
                - tăng dần : sort();
                - giảm dần : rsort();
   - đổi dạng string -> array: explode(dấu ngăn cách,$bien);
         vd: $a = "18/11/1999";
             $b = explode("/",$a);

   - đổi dạng  array-> string : implode("ký tự phân cách".$bien_array);
            vd: $a = [18,11,1999];
                $b = implode("/",$a);


   - các hàm được xây dựng sẵn(built-in functions) làm việc vs array :
    // tạo
    + array_values($array) : tạo mảng mới có value là value của $array cũ,với index tự tăng
    + array_keys($array) : tạo mảng mới có value là key của $array cũ,với index tự tăng

    // xóa, thêm ,sửa
    + array_pop($array) : xóa và trả về value cuối cùng của mảng
    +array_push($array,$var,$var...) : thêm một hoặc nhiều phần tử vào cuối mảng và
                                        trả về số lượng phần tử của mảng sau khi thêm (trả về kiểu number)(2...).

    + array_shift($array) :  xóa phần tử đầu tiên của mảng và trả về phần tử vừa xóa.
    + array_unshift($array, $var, $var...) :  Hàm có tác dụng thêm một hoặc nhiều phần tử vào đầu mảng,
                                                và trả về số lượng phần tử của mảng sau khi thêm.
                                                (trả về kiểu number)
    +array_unique($array) : Hàm có tác dụng loại bỏ các phần tử
                                có key trùng nhau
                                hoặc value trùng nhau trong mảng
                              và trả về một mảng mới sau khi đã loại bỏ.
    // chuyển đỏi , tìm kiếm cắt
    + array_flip($array) : Hàm này có tác dụng chuyển đổi key của mảng thành value và ngược lại.
    + array_reverse($array) : Hàm có tác dụng đảo ngược lại vị trí của các phần tử trong mảng
    + array_rand($array, $number) : Hàm có tác dụng lấy ra key ngẫu nhiên trong mảng với
                                    number là số lượng muốn lấy.
    + array_search($keyword,$array) Hàm có tác dụng tìm kiếm giá trị của mảng và
                                    trả về key của phần tử đó nếu có.

    + array_change_key_case($array, $case) : chuyển tất cả key trong mảng thành
                                    chữ hoa nếu $case: 1 $case: hoặc CASE_UPPER
                                    chữ thường nếu $case: 0 $case: hoặc CASE_LOWER
     + array_count_values ( $array ) : Đếm số lần xuất hiện của các phần tử giống nhau trong mảng
                                        và trả về một mảng kết quả.
    // gộp mảng
    + array_merger($array,$array...) : Hàm có tác dụng gộp hai hay nhiều mảng thành một mảng.
    + array_combine($array_keys, $array_values) : Trộn 2 mảng $array_keys và $array_values
                                                    thành một mảng kết hợp với $array_keys là danh sách keys,
                                                        $array_value là danh sách value tương ứng với key.
                                                    Điều kiện là 2 mảng này phải bằng nhau.
    // kiểm tra :
    + in_array() : Kiểm tra nếu một value đã xác định là tồn tại trong một mảng.
    trả về true / false
    + array_key_exists($key, $searcharray) : Kiểm tra key $key có tồn tại trong mảng $searcharray không,
                                              trả về true nếu có và false nếu không có.