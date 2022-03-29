<?php
class App
{


    //http://localhost/live/Home/Sayhi/1/2/3
    protected $controller = "Home";
    protected $action = "Sayhi";
    protected $params; // 1/2/3

    function __construct()
    {   // array ([0]=> Home [1]=> Sayhi [2]=> 1 [3]=> 2)
        $arr = $this->UrlProcess();
        print_r($arr);
        echo "<br>";

        // XỬ LÝ CONTROLLER
        if( file_exists("../mvc_coban/controllers/".$arr[0] .".php") )
        {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "../mvc_coban/controllers/".$this->controller.".php";


        // xử lý action
        if(isset($arr[1]) )
        {
            if( method_exists( $this->controller , $arr[1]) )
            {
                $this->action = $arr[1];
            }

            unset($arr[1]);
        }

        // xử lý params
                   // nếu tồn tại arr gắn value arr cho $this->param nếu không mang giá trị rỗng
        $this->params = $arr?array_values($arr):[];


        call_user_func_array([$this->controller, $this->action], $this->params );
    }

    // XỬ LÝ URL
    function UrlProcess()
    {   // Home/Sayhi/1/2/3
        if (isset($_GET["url"])) {
          return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }
}



