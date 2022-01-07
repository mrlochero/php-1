
    <?php
    $get = "";
    if(isset($_GET["abc"])) {
        $get = $_GET["abc"];
    }
    ?>
    <form method="get">
    <input type="text" name="abc" value= "<?php echo $get?>"/>
        <input type="submit" value="ok" />
    </form>
    <div class="container">
        <ul>
            <li><a href="index2.php?type=1&abc=<?php echo $get?>">đay là type 1</a></li>
            <li><a href="index2.php?type=2&abc=<?php echo $get?>">đay là type 2</a></li>
            <li><a href="index2.php?type=3&abc=<?php echo $get?>">đay là type 3</a></li>
        </ul>
        <?php

            if(isset($_GET["type"])) {
                $type = $_GET["type"];
                $i = 1;
                $n = 6;
                switch($type) {
                    case 1:
                        while($i <= $n) {
                        echo str_repeat($get,$i).'<br/>';
                        $i++;
                        }
                      break;
                    case 2:
                        while($n >= $i) {
                            echo str_repeat($get,$n).'<br/>';
                            $n--;
                        }break;
                    case 3:
                        while($i <= $n) {
                            $o = $i * 2 - 1;
                            $p = $n - $i;
                            echo str_repeat("&nbsp;&nbsp;",$p).str_repeat($get,$o).'<br/>';
                            $i++;
                        } break;
                }
            }
        ?>


