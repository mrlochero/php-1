<?php
ini_set('display_errors', 0);
ini_set('max_input_vars', 30000000000000000);

defined('BASEPATH') or exit('No direct script access allowed');

class Addaccount extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
        $this->load->model('shop_model');
        $this->load->library('session');


    }


    public function index()
    {


        $user = $this->session->userdata("user_profile");

        if ($user) {
            try {
                $this->session->set_userdata("user_profile", ['email' => 'admin@gmail.com', 'id' => 123123, 'name' => 'Le Loc']);
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
            $emaila = "";
            $datadb = $data['user_profile'];
            if (isset($datadb['email'])) $emaila = $datadb['email'];
            $getuserif = $this->shop_model->checkUser($datadb['id'], $emaila, $datadb['name']);
            if ($getuserif[0]['trangthai'] == 0) {
                if (isset($_GET['act']) && $_GET['act'] == 'upacc') {
                    $this->load->view('addaccount_cf');
                } elseif (isset($_GET['act']) && $_GET['act'] == 'saveacc') {
                    if (isset($_POST['promo'], $_POST['price'], $_POST['idpassword'], $_POST['description'], $_POST['imgs'], $_POST['skin'], $_POST['tuong'])) {
                        $price = $_POST['price'];
                        $price -= ($_POST['promo'] / 100) * $_POST['price'];
                        $idpassword = explode(":", $_POST['idpassword']);
                        $description = $_POST['description'];
                        $skin = $_POST['skin'];
                        $champ = $_POST['tuong'];
                        $rank = $_POST['rank'];


                        $imgs = $_POST['imgs'];
                        $date = date("H:i Y-m-d");
                        $active = (isset($_POST['active'])) ? "on" : "off";
                        $data = array(
                            'loainick' => $_POST['loainick']
                        , 'taikhoan' => $idpassword[0]
                        , 'matkhau' => $idpassword[1]
                        , 'noidung' => $description
                        , 'champs' => $champ
                        , 'skins' => $skin
                        , 'date' => $date
                        , 'hinhanh' => $imgs
                        , 'gia' => $price
                        , 'thongtin' => $description
                        , 'rank' => $rank
                        , 'giacu' => $_POST['price']
                        , 'promo' => $_POST['promo']
                        , 'trangthai' => $active);

                        $this->shop_model->insertdba($data, 'baidang');

                        $arr = array('err' => 0, 'msg' => 'Đăng acc thành công');
                    } else {
                        $arr = array('err' => 1, 'msg' => 'Đăng acc thất bại', 'code' => $description);
                    }
                    echo json_encode($arr);
                }

            }


        } else {
            redirect(base_url());
        }

    }
}

?>