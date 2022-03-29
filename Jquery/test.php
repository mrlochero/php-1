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

     <div>
    <H2>  Cách ẩn hiện nội dung khi click vào button trong jQuery </H2>

        <div>
            <lable><span>màu xanh lá</span><input class="selector__radio" type="radio" name="colorRadio" value="green"></lable>
            <lable><span>màu vàng</span><input class="selector__radio" type="radio" name="colorRadio" value="yellow"></lable>
            <lable><span>màu đỏ</span><input class="selector__radio" type="radio" name="colorRadio" value="red"></lable>
        </div>

        <div class="block__color">
            <div class="green box"> Bạn đã chọn màu xanh lá  </div>
            <div class="yellow box"> Bạn đã chọn màu vàng    </div>
            <div class="red box"> Bạn đã chọn màu đỏ         </div>
        </div>

    <script>
        $(document).ready(function (){
            $('.box').hide();
            $('input[type="radio"]').click(function (){
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $('.box').hide();
                $(targetBox).show();
            })
        })
    </script>
<hr>

</center>
</body>
</html>