<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TRẮC NGHIỆM TÍNH CÁCH</title>
</head>
<body>
<?php
    require_once 'function_a.php';//arrQuestions
    require_once 'function_b.php';//arrOptions

        $newarray = [];

     foreach($arrQuestions as $keyA => $valueA) {
         $newarray[$keyA]['question'] = $valueA['question'];
         $newarray[$keyA]['sentences'] = $arrOptions[$keyA];
     }
<Div class="content">
    <h1>Trắc nghiệm tính cách</h1>
    <form action="result.php" method="POST" name="mainFrom">
        <?PHP
           foreach ($newarray as $keyB => $valueB) {
               echo '<div class="question">';
               echo '<p> <span>Câu hỏi '.$keyB.' : </span>'.$valueB['question'].'</p>';
               echo'<ul>';
               foreach ($valueB['sentences'] as $keyC => $valueC) {
                   echo '<LI><label><input type="radio" name="'.$keyB.'" value="'.$valueC['point'].'"></label>'.$valueC['option'].'</LI>';
               }
               echo'</ul>';
           }
        ?>
</div>
          <center> <input type="submit" value="Kiểm tra" name="submit"> </center>

    </form>
</Div>
</body>
</html>