

                                    //GET - method:

- Phương thức GET rất dễ nhận thấy đó là trên URL sẽ kèm theo dữ liệu mà chúng ta muốn gửi
- Server sẽ phân tích tất cả những thông tin đằng sau dấu hỏi (?)
- Ví dụ: Với URL freetuts.net?id=12 thì Server sẽ nhận được giá trị id = 12
- Để truyền nhiều dữ liệu lên Server ta dùng dấu & để phân cách giữa các cặp giá trị.
                                    Giả sử tôi muốn truyền id = 12 và title = ‘method_get’
                                    thì URL sẽ có dạng freetuts.net?id=12&title=method_get.
                                    Lưu ý với các bạn là vị trí các cặp giá trị không quan trọng,
                                    nghĩa là cặp title có thể nằm trước cặp id cũng được.

- tất cả các dữ liệu gửi bằng phương thức GET đều được lưu trong biến toàn cục : $_GET
                       +là kiểu mảng kết hợp
                                    Vd : với URL freetuts.net?id=12&title=method_get ;
                                    dữ liệu trong biến $_GET sẽ được lưu :
                                                $_GET = array(
                                                'id' => '12',
                                                'title' => 'method_get'
                                                );
                                    dùng vòng lặp foreach duyệt qua:
                                    foreach ($_GET as $key => $val);

-  kiểm tra tồn tại :               if (isset($_GET['id']))
                                    {
                                         $id = $_GET['id'];
                                    }



                                    // POST
- Phương thức POST có tính bảo mật hơn
                                    vì dữ liệu gửi phải thông qua một form HTML nên nó bị ẩn,
                                    nghĩa là chúng ta không thể thấy các giá trị đó được.
- tất cả các dữ liệu gửi bằng phương thức POST đều được lưu biến toàn cục : $_POST
                                    +là kiểu mảng kết hợp
                                    + dùng vòng lặp foreach duyệt qua
-  kiểm tra tồn tại :
                                    if (isset($_POST['id']))
                                    {
                                    $id = $_POST['id'];
                                    }