<?php

//tạo AUtoload_class
spl_autoload_register('loader');
function loader($className)
{
    $path = "./classes/";
    $extension = ".classs.php";
    $fullpath = $path . $className . $extension;
    include_once $fullpath;
}
