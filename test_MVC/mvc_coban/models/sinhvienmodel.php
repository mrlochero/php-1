<?php
class Sinhvienmodel extends DB {
    public function setsv(){
        return "get sinhvien-model";
    }

     function getsv()
     {   $sql = "select * from sinhvien";
         $pre = $this->connect()->query($sql);
         foreach ($pre as $row) {
             echo $row['user_name']."<br>";
         }
     }

    public function tong($m, $n){
        return $n + $m;
    }
}