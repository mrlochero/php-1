<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // To use site_url and redirect on this controller.
        $this->load->helper('url');
        $this->load->model('shop_model');


    }


    public function index()
    {
        $config = array(
            'ws_url' => 'http://gachthe.megapay.net.vn/chargingApi',                                         //link webservice của Epay
            'partnerId' => '10222',                                                                     //Mã Merchant, sau khi đăng ký dịch vụ, Epay sẽ cung cấp cho khách hàng
            'targetAcc' => 'chrapi',                                                                    //Tên Merchant Epay cung cấp cho khách hàng
            'password' => '9038b8'
        );
        require('services.php');

        $user = $this->session->userdata("user_profile");

        if ($user) {
            try {
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
            $emaila = "";
            if (isset($datadb['email'])) $emaila = $datadb['email'];
            $datadb = $data['user_profile'];
            $getuserif = $this->shop_model->checkUser($datadb['id'], $emaila, $datadb['name']);
            $money = $getuserif[0]['cash'];
            if (!empty($_POST)) {
                $service = new ChargingAPIServices($config);
                $response = $service->charging($_POST);

                $status = $response['status'];

// nap the thanh cong
                if ($status == 00) {
                    $info_card = $response['realAmount'];
                    $money += $info_card;
                    $date = date("H:i Y-m-d");
                    $data = array('cash' => $money);
                    $this->shop_model->updatedb($datadb['id'], $data);
                    $datanap = array('id' => $datadb['id'], 'name' => $getuserif[0]['name'], 'loaithe' => $_POST['telcoCode'], 'serial' => $_POST['cardSerial'], 'mathe' => $_POST['cardPin'], 'menhgia' => $info_card, 'date' => $date);
                    $this->shop_model->insertdba($datanap, 'lichsunap');

                    $arr = array('err' => 0, 'msg' => 'Nạp thẻ thành công mệnh giá ' . $info_card);
                } else {
                    $arr = array('err' => 1, 'msg' => 'Thẻ không đúng định dạng');

                }
            }


        } else {
            $arr = array('err' => 1, 'msg' => 'Bạn chưa đăng nhập');
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }
        echo json_encode($arr);


    }
}

?>