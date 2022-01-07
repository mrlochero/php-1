<?php
 $data = file('options.txt') or die('không đoc được');


 array_shift($data);
 $arrOptions = [];
 foreach ($data as $key => $value) {
     $tmp = explode("|",$value);

     $questionID = $tmp[0];
     $optionsID = $tmp[1];
     $answer = $tmp[2];
     $point = $tmp[3];
     $arrOptions[$questionID][$optionsID]['option'] = $answer;
     $arrOptions[$questionID][$optionsID]['point'] = $point;
 }

