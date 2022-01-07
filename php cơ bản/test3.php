<?php

class Dongvat
{
    public $ten;
    private $action;

    function __construct($t = 0, $a = 0)
    {
        $this->ten = $t;
        $this->action = $a;
    }

    function getAction()
    {
        return $this->action;
    }

}

$con_bo = new Dongvat("con bò");
$con_heo = new Dongvat("con heo");
$con_cho = new Dongvat("con chó");
//echo $con_bo->ten;
echo $con_bo->ten.$con_bo->getAction()."</br>";
//echo $con_heo->ten.$con_heo->getAction(2)."</br>";
//echo $con_cho->ten.$con_cho->getAction(4);