
<style type="text/css">
    * {
        margin: 0px;
        padding: 0px;
    }

    .content {
        margin: 20px auto;
        width: 600px;
        border: 1px solid #999;
        padding: 10px;
    }

    .content h1 {
        color: green;
        text-align: center;
    }

    .row {
        margin-top: 20px;
        text-align: center;
    }

    .row p {
        color: cadetblue;
    }

    .bocap {

        height: 110px;
        width: 110px;
    }

    .result {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .result p {
        font-size: 20px;
    }

</style>
<body>
<?php
$n1 = "";
$n2 = "";
$img = "";
$time = "";
$name = "";
$fal = true;
if (isset($_POST["number1"]) && isset($_POST["number2"])) {
    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];

    if (is_numeric($n1) && is_numeric($n2) && $n2 <= 12 && $n2 > 0 && $n1 <= 32 && $n1 > 0) {
        switch ($n2) {
            case 10:
                if ($n1 >= 24) {
                    $img = "bocap";
                    $name = "bọ cạp";
                    $time = "24/10 - 22/12";
                }
                break;
            case 6:
                if ($n1 <= 21) {
                    $img = "songtu";
                    $name = "song tử";
                    $time = "21/5 - 22/6";
                }
                break;
        }

    } else {
        $fal = false;
    }
}
?>
<div class="content">
    <h1>Cung hoàng đạo</h1>
    <form method="post" name="main-from">
        <div class="row">
            <span>Ngày sinh</span>
            <input type="text" name="number1" value="<?php echo $n1; ?>"/>
        </div>
        <div class="row">
            <span>Tháng sinh</span>
            <input type="text" name="number2" value="<?php echo $n2; ?>"/>
        </div>
        <div class="row">
            <input type="submit" value="xem chòm sao"/>
        </div>

        <?php
        if ($fal) {
            $result = '<div class="result">
                   <img class="bocap" src="img/' . $img . '.png" alt=" ảnh chòm sao">
                   <p>chòm sao của bạn là : <span>' . '(' . $name . ' ' . $time . ')' . '</span></p>
               </div>';
            echo $result;
        } else {
            echo '<div class="result">
                  <p>bạn nhập không chuẩn</p>
                  </div>';
            }

        ?>

    </form>
</div>
</body>

</html>