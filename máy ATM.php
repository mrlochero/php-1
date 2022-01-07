<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>máy ATM </title>
</head>
<body>
<style>
    .*{
        margin: 0;
        padding:0;
    }
    .container {
        margin: 0 auto;
        width: 600px;
        height: auto;
        border: solid 1px green;
        padding: 12px;
    }
        .header {
            width:100%;
            height: 200px;
            /*background-color:red;*/
            display: flex;

        }
         .header img{
             width:40%;
             height: 188px;
         }
         .header_cont{
             width:60%;
             margin-left: 22px;
         }
           .header_cont h1 {
               color: green;
               text-align: center;
           }
           #input_money {
             width:78%;
           }
/*           phần giữa */
        .content{
            /*background-color: green;*/
            margin: 12px 2px;
            padding:6px;
        }
            .cont_1 {
                display:flex;
                width:100%;
                font-weight: bold;
            }
            .cont_2 {
                display:flex;
            }
            .cont_3 {
                display:flex;
            }
                .clo1{
                    width:280px;
                }
                .clo2{
                    width:165px;
                }
                .clo3{
                    width:12px;
                }
                     .clo1-1{
                         width:266px;
                         font-size: 19px;

                     }
                     .clo2-1{
                         font-size: 19px;
                     }
                     .clo3-1{
                         font-size: 19px;
                      }
/* phần cuối*/
     .center{
        text-align: right;
     }
         .center_sp{
             font-size:25px;
             font-weight: bold;
             color: cornflowerblue;
         }
</style>

<div class="container">
    <?php
    $money = 0;
    if(isset($_POST["money"])) {
        $money = $_POST["money"];
    };
    include_once 'FUNCTION.php';
    $menh_gia = [500000,200000,100000,50000,20000,10000,5000,2000,1000,500];
    ?>
    <div class="header">
        <img src="img/images.jpg"/>
        <div class="header_cont">

            <h1>Mô Phỏng máy ATM</h1>

            <form action="#" method="post">
                <h3>vui lòng nhập số tiền muốn rút</h3>
                <input id="input_money" name="money" type="text" value="<?php echo $money; ?>"/>
                <input type="submit" value="rút tiền">
            </form>
    </div>

    </div>

    <div class="content">
        <div class="cont_1">
            <p class="clo1 clo1-1">Mệnh giá</p>
            <p class="clo2 clo2-1">Số lượng</p>
            <p class="clo2 clo3-1">Thành tiền</p>
        </div>
        <?php
        $money2=$money;
        $tong=0;

        foreach($menh_gia as $gia) {
            $ket_qua2 = atm($money2,$gia);
            $money2 = $ket_qua2[1];
            $to_tien = $ket_qua2[0];
            $tong += $to_tien * $gia;
            if ($to_tien == 0) {
                continue;
            }
            echo '
            <div class="cont_2">
                <p class="clo1">'.number_format($gia).'</p>
                <p class="clo2">'.$to_tien.'</p>
                <p class="clo3">'.number_format($to_tien * $gia).'</p>
            </div>
            ';
        }
        ?>
    </div>

    <div class="center">
        <hr />
            <span class="center_sp">Tổng tiền: <?php echo number_format($tong);?></span>
    </div>
</div>

</body>
</html>



