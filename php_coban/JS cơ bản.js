
                                      // BIẾN
1. BIẾN : var tên biến = value;
2. hằng : const tenHang = value;
    // hằng ko thể thay đổi giá trị, truyền true để ko phân biệt in hoa;
3.Template string ES6 : ` tôi là : ${tên biến}`;
4. Toán tử 3 ngôi - Ternary operator : var a = điều kiện ? value1 : value2
                                      - Nếu điều kiện là đúng (hay là true)
                                          thì toán tử sẽ trả về value 1

                                          còn nếu là sai (hay là false)
                                          thì nó sẽ trả về giá trị của value 2

                                // II các build-in function : các hàm có sẵn trong js
1. console.log() // xuất ra màn hình;
2. typeof; //kiểm tra dữ liệu;
    valueOf() //lấy giá trị của biến hoặc một giá trị nào đó
    lưu ý : 6 trường hợp trả về false nếu biến mang giá trị : 0 , NULL ,"" - '', FALSE , NaN , undefined


                              // các loại dữ liệu trong js

1. STRING // chuỗi;
2. NUMBER// số;
3. UNDEFINED// ko xác định
4.boolen // true,false;
5.array // mảng;
6.object //;
7.null// rỗng;
8. SYMBOL

                                1.//  STRING : chuỗi
1.1 length(); //đếm chuỗi;
1.2 Find index : //tìm kiếm chuỗi
    - indexOf(value, //vị trí trỏ chuột (bắt đầu từ số 0));
    - lastIndexOf(value); //tìm kiếm từ cuối cùng;
    - search(value); //có thể tìm theo biểu thức chính quy
              - lưu ý : không tìm thấy sẽ trả về : - 1

1.3 Cut string // cắt chuỗi
    - slice(start,end)
     - vị trí cắt có thể:
        + 0 : cắt hết chuỗi
        + số âm cắt từ cuối chuỗi
1.4 Replace // thay thế
    - replace(value,value thay thế)
        + sủ dụng với  biểu thức chính quy :
            /value/g : tìm tất cả value
1.5 Convert to upper case // chuyển thành chữ IN HOA
    - toUpperCase()
    Convert to lower case // chuyển thành chữ thường
    - toLowerCase()
1.6 Trim // cắt khoảng trắng đầu cuối chuỗi
    trim()
1.7 Split // chuyển string -> array
    - split(điểm chung)
        + "" // chuỗi rỗng sẽ cắt từng ký tự
1.8 Get a character by index // lấy 1 ký từ tuwd index
    - charAt(index)
        + ko tìm thấy sẽ trả về "";
    - value[index];
        + ko tìm thấy sẽ trả về undefined


                                 2.// Number

1, To string // chuyển sang kiểu string
    - to String(value)

lưu ý :
        NaN : ĐẠI DIÊN SỐ KHOONG HỢP LỆ
        + kiểm tra NaN : isNaN(VALUE);

2, To Fixed // làm tròn số thập phân
    -toFixed(value)
        + kiểu dữ liệu trả về khi dùng hàm toFixed là string
3.  - parseFloat() //chuyển sang một số float
    - parseInt() //chuyển sang một số integer
    - toPrecision(n) //chuyển sang số có chiều dài là n

                            4.// ARRAY - MẢNG
4.1tạo mảng :
 4.1a - c1 : var array_1 = new array("key1"=>"value1","key2"=>"value2");
      - c2 : var array_2 = ["key1"=>"value1","key2"=>"value2"];
     // array với số key tự tăng start từ số 0:
    var array = ["value1", "value2",...];
              array[0] --> "value1";
     // Thêm phần tử vào mảng
       bienmang[index] = giatri;   // thêm vào phần tử với chỉ số index, phần tử nếu là mới
                                    // thêm sẽ nằm cuối, dù giá trị index bao nhiêu
       bienmang[] = giatri;       // thêm vào cuối phần tử mới, chỉ số phần tử này bằng chỉ số lớn nhất cộng 1
                                    // nếu đây là phần tử đầu tiên của mảng thì chỉ số sẽ là 0 ;
                                    // nếu trùng index-key sẵn thì sẽ gắn lại giá trị
4.2 làm việc với array :
  4.2a - hiển thị array dùng hàm : console.log()

  4.2b - lấy độ dài : .length;

  4.2c - xóa phần tử :
       + .pop() //xóa phần tử cuối mảng
       + .shift() //xóa phần tử đầu mảng

  4.2c - thêm phần tử :
        + .push() thêm 1, hay nhiều phần tử  vào cuối mảng
        + .unshift() thêm 1, hay nhiều phần tử  vào đầu mảng

  4.2c xóa,chèn,thêm phần tử :
        + .splice(start,"số lượng phần tử muốn xóa","thêm element")
             vd : a.splice(0,0,"loc")

  4.2c nối array  :
        .concat // nối mảng
        vd : manggoc.concat(mangnoithem);

  4.1 cắt 1 hoặc nhiều phần tử :
        + slice(start,end)

  4.2e - đổi dạng string -> array: explode(dấu ngăn cách,$bien);
     vd:  $a = "18/11/1999";
          $b = explode("/",$a);

  4.2.f - đổi dạng  array-> string :  .toString(); // mặc định ngăn cách bằng đấu ","
                                      .join("ký tự phân cách");
        vd: var a = [18,11,1999];
            var b = a.join("/");
  - kiểm tra : Array.isArray(value)
4.3 làm việc với array :
- duyệt qua từng phần tử của mảng : .forEach(function(item, index) { }) ;
- kiểm tra tất cả phần  tử của mảng phải thỏa mãn điều kiện gì đó :
                                     array.every(function(item, index) { return array.item === 0}) ;
- kiểm tra chỉ cần 1 phần  tử của mảng thỏa mãn điều kiện gì đó :
                                      array.some(function(item, index) { return array.item === 0}) ;
- tìm kiếm phần tử trong mảng chỉ trả về phần tử đầu tiên tìm được :
                                      array.find(function(item, index) { return array.item === "ruby"}) ;
- tìm kiếm phần tử trong mảng và trả về tất cả phần tử tìm được :
                                      array.filter(function(item, index) { return array.item === "ruby"}) ;
- Giá trị trả về của hàm map trong js là một mảng mới, với số lượng phần tử bằng với mảng cũ,
  nhưng giá trị của các phần tử thì được quyết định bởi lệnh return của hàm map.
    array.map(function(item){
        // item chính là phần tử đang lặp
        return [ key: item.value; ]// giá trị trả về sẽ thay thế cho giá trị ban đầu của phần tử
    });
-được sử dụng để thực thi một hàm lên các phần tử của mảng (từ trái sang phải)
với một biến tích lũy để thu về một giá trị duy nhất :
    array.reduce(function(total, currentValue, currentIndex, arr), 0) {
        return total + currentValue.coin
                                      }

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
         if("điều kiện""){
             //điều kiện true sẽ nhảy vào đây;
        }
          elseif("điều kiện") {
             // đk if(flase) sẽ nhảy vào đây nếu elseif(true);
            // sẽ chỉ nhảy vào 1 elseif(true) nào đứng trk;
        }
        else{
            // elseif(flase) và elseif(flase) sẽ nhảy vào đây;
        }


    2. switch case :
        2.1 switch ("dữ liệu cần ktra") {
            case : // điều kiện đúng sẽ lọt vào
            default: // khác
            break; //thoát khỏi block;
}
- lưu ý : trên 3 key sẽ dùng switch dưới nê dùng if else



                             // VÒNG LẶP:
         for - lặp với điều kiện đúng;
         for/in - lặp qua key của đối tượng;
         for/of - lặp qua value của đối tượng;
         while - lặp khi điều kiện đúng;
         do/while - lặp ít nhât 1 lần, sau đó lặp khi điều kiện đúng;

1. for ($i = 0 ; $i <= 10 ; $i++) {
         echo $i
}
2. for/in - lặp qua key của đối tượng array string :
      for(var key in array) { }
3. for/of - lặp qua value của đối tượng array string :
      for(var value in array) { }
          - lặp qua value của đối tượng object : + Object.keys() : tạo mảng chứa key 0bject
                                                 + Object.values() : tạo mảng chứa value 0bject
               vd : for(var key in Object.keys()) {
                        console.log(key)
               }
2.  while :
    var i = 1 ;
          while (i <= 10) {
                echo i ;
                i++ ;
          }// khác cú pháp với for;
3. do while :
    var i = 1;
          do{
              echo $i;
              i++;
          }while(i>10)// chạy ít nhất 1 lần rồi mới ktra đk;
 - lưu ý :  break : thoát khỏi
            continue :  bỏ qua
- nested loop : là vòng lặp lồng nhau

                            //IV FUNCTION - HÀM
 - buil-in : hàm được xây dựng sẵn
 - hàm tự định nghĩa
   tên hàm có thể chứa : ( a-z A-Z 0-9 _ $ ) không được đặt number ở chữ cái đầu tiên
        - Declaration function // có hosting : có thể gọi trk khi định nghĩa
            + function tenham() { }
        - expression function
            + var autologin = function () { }    // có thể đặt tên hoặc ko

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
   4.1 declaration fuction : được hosting ( là có thể sử dụng  rồi mới khai báo sau)
            vd: function showmessger(){}
   4.2 expression fuction : ko có hosting
            vd: var showmessger = function(){}
            vd: var showmessger = function showmessger(){}

                               // VII :  Object
1. tạo :
    var myObject = {
        key : value,
        key2 : value,
        [biến] : value
     };
2. lấy giá trị :
    + lấy value : c1 :  myObject.key
                  c2 : myObject.["key"]
3. Object constructor :
  - khởi tạo :  var User = function(firtsName,lastName) {
                this.firstName = firtsName;
                this.lastName = lastName;
                this.getName = function () {
                    return `${this.firstName} ${this.lastName}`
                }
           }
  - khởi tạo và gán giá trị : var Loc = new User ('Lê Vĩnh', 'Lộc');
  - khởi tạo và gán giá trị : var Loc2 = new User ('Lê Vĩnh', 'Lộc2');

  - gắn giá trị riêng từng đối tượng : + Loc.age = 22;
                                       + Loc2.haha = "haha";
  - gắn giá trị cho chính Object constructor bằng prototype :
         +   User.prototype.key3 = "đây là key mới đc thêm vào User"


                // XV tạo thời gian
1. var date = new Date();

  var year = date.getFullYear();
  var month = date.getMonth() + 1; // +1 vì hiên thị từ 0-11
  var day = date.getDay();
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var seconds = date.getSeconds();

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
8. hack facebook



