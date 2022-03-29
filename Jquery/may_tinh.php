<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./main.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title> Bài Tập Jquery </title>
</head>

<body>
<center>
     <br>
     <br>

      </div>
    <hr>
     <div>
         <br>
         <H2> Tạo máy tính bằng Jquery  </H2>

           <div class="calculator">
               <input type="text" class="hover__item box__calculation" value="">
               <input type="text" class=" hover__item box__result" value="" >

               <div class="box-button">
                   <button class=" hover__item refresh">CE</button>
                   <button class=" hover__item del">Del</button>
                   <button class=" hover__item cong operation">+</button>
                   <button class=" hover__item tru operation">-</button>
                   <button class=" hover__item nhan operation">*</button>
                   <button class=" hover__item chia operation">/</button>
                   <button class=" hover__item number">9</button>
                   <button class=" hover__item number">8</button>
                   <button class=" hover__item number">7</button>
                   <button class=" hover__item number">6</button>
                   <button class=" hover__item number">5</button>
                   <button class=" hover__item number">4</button>
                   <button class=" hover__item number">3</button>
                   <button class=" hover__item number">2</button>
                   <button class=" hover__item number">1</button>
                   <button class=" hover__item number">0</button>
                   <button class=" hover__item cham">.</button>
                   <button class=" hover__item equal">=</button>

               </div>
           </div>

         <script>
             $(document).ready(function (){
                 // vô hiệu hóa các nút
                 $('.box__calculation').attr('disabled','true'); // Vô hiệu hoá ô phép tính
                 $('.box__result').attr('disabled','true'); // Vô hiệu hoá ô kết quả
                 $('.box-button .nhan').attr('disabled','true'); // vô hiệu hóa nút X
                 $('.box-button .chia').attr('disabled','true'); // vô hiệu hóa nút /
                 $('.box-button .equal').attr('disabled','true'); // vô hiệu hóa nút =

                 //click vào các nút số
                 $('.number').on('click', function (){
                     var char = $(this).html(); // lấy số vừa click
                     var value_calculation = $('.box__calculation').val();// Lấy chuỗi giá trị trong ô phép tính
                     $('.box__calculation').val(value_calculation + char); // Thêm số vừa click vào sau chuỗi giá trị trong ô phép tính
                     $('.operation').removeAttr('disabled'); //gỡ vô hiệu hóa các nút X /
                     $('.equal').removeAttr('disabled'); //gỡ vô hiệu hóa các nút =
                     $('.cham').removeAttr('disabled');// gỡ vô hiệu hóa nút .
                 })

                 // click nút " . "
                 $('.cham').on('click',function (){
                     var char = $(this).html();// lấy dấu chấm
                     var value_calculation = $('.box__calculation').val();// lấy value ô tính
                     $('.box__calculation').val(value_calculation + char);// thêm dấu . vào ô tính
                     $('.operation').attr('disabled','true');// vô hiệu hóa các nút tính toán
                     $(this).attr('disabled','true');//vô hiệu hóa nút chấm
                     console.log(char);
                 })

                 // click nút CE
                 $('.refresh').on('click', function (){
                     $('.box__calculation').val('');// làm trống ô phép tính
                     $('.box__result').val('');//là trống ô kết quả
                 })
                 // click nút DEL
                 $('.del').on('click', function (){
                     var string = $('.box__calculation').val();
                     $('.box__calculation').val(string.slice(0, -1)); //xóa ký tự cuối trong ô tính
                     $('.box__result').val('');//là trống ô kết quả
                 })
                 // click nút phép toán
                 $('.operation').on('click', function (){
                     var char = $(this).html();
                     var value_calculation = $('.box__calculation').val();
                     $('.box__calculation').val(value_calculation + char);
                     $('.nhan').attr('disabled', 'true'); // vô hiệu hóa nút X
                     $('.chia').attr('disabled', 'true'); // vô hiệu hóa nút /$('.dot').removeAttr('disabled');
                     $('.equal').attr('disabled','true');//vô hiệu hóa các nút =
                 })
                 //click NÚT =
                 $(".equal").on('click', function (){
                     var result = $('.box__calculation').val();
                     $('.box__result').val(eval(result));
                 })
             })
         </script>
     </div>
<hr>

</center>
</body>
</html>