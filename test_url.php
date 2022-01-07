<?php

$url = "http://210.23.4124./music/nhactre/TinhYeu_LeVinhLoc/wma32/06_BienXanh_TinhYeu_LeVinhLoc.mp3";

/* url"   : 06_BienXanh_TinhYeu_LeVinhLoc.mp3
   ID     : 06
   Name   : Bien Xanh
   Album  : Tinh Yeu
   Singer : LeVinhLoc
   Type   : mp3
*/


 // cách 1 :
function getInfor($a) {
    $infor =  explode("/",$a);
    $result = $infor[count($infor) - 1] ;
    return $result;
    }
getInfor($url);
$infor_URL = getInfor($url);

$arr_Url= explode("_",$infor_URL);
$arr_Url2 = explode(".",$arr_Url[3]);
array_pop($arr_Url);
$new_arr_Url = array_merge($arr_Url,$arr_Url2);


function format($str) {
    $result = $str[0];
    for($i = 1; $i < strlen($str);$i++) {
        if(ctype_upper($str[$i])) {
            $result .= " " .$str[$i];
        }else {
            $result .= $str[$i];
        }
    }  return $result;
}


$result = [];
$result["iD"] = $new_arr_Url[0];
$result["album"] = format($new_arr_Url[1]);
$result["name"] = format($new_arr_Url[2]);
$result["singer"] = format($new_arr_Url[3]);
$result["typer"] = $new_arr_Url[4];



echo "<pre>";
print_r($result);
echo "</pre>";








// cách 2:
//function getInfor2($b) {
//    $arrayURL = parse_url($b);
//    $infor = explode("/",$arrayURL['path']);
//    $result = $infor[count($infor) - 1];
//}
//getInfor2($url);
//echo "<pre>";
//print_r($infor);
//echo "</pre>";



