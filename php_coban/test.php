<?php

class SieuNhan{
    public $ten;
    private $power1;

    function setpower1($n){
        if($n >= 99) {
            $this->power1 = $n;
        }else{
            $this->power1 = 99;
        }

    }
    function getpower1() {
        return $this->power1;
    }
    function __construct($t, $p) {
        $this->ten = $t;
        $this->power1 = $p;
    }
}

$ironMan = new SieuNhan("ng sắt",909);
echo $ironMan->setpower1(909);
echo $ironMan->getpower1();

 for($i = 0 ; $i <= 10 ; $i++) {
    echo $i;
}

?>
