<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Getacc extends CI_Controller
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
        $this->load->library('facebook'); // Automatically picks appId and secret from config
        $this->session->set_userdata("user_profile", ['email' => 'admin@gmail.com', 'id' => 123123, 'name' => 'Le Loc']);
        $user = $this->session->userdata("user_profile");
        if ($user) {
            try {
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
            $emaila = "";
            $datadb = $data['user_profile'];
            if (isset($datadb['email'])) $emaila = $datadb['email'];
            $getuserif = $this->shop_model->checkUser($datadb['id'], $emaila, $datadb['name']);

            $money = $getuserif[0]['cash'];
            if (!isset($_POST['id'], $_GET['act'])) exit;
            $acc = $_POST['id'];

            $this->db->where('id', $acc);
            $q = $this->db->get('baidang');
            $value = $q->result_array();
            $data['thanhcong'] = false;
            $data['conhang'] = false;
            $data['act'] = false;

            if ($_GET['act'] == "buy") $data['act'] = true;

            if ($value[0]['trangthai'] == "on" && $data['act'] && $q->num_rows() > 0) {
                $data['conhang'] = true;
                if ($money >= $value[0]['gia']) {
                    $data['thanhcong'] = true;
                    $dataacc = array("trangthai" => "off");
                    $money -= $value[0]['gia'];
                    $datauser = array("cash" => $money);
                    $this->shop_model->updatedbacc($acc, $dataacc);
                    $this->shop_model->updatedb($getuserif[0]['id'], $datauser);
                    $datamua = array('id' => $datadb['id']
                    , 'loainick' => $value[0]['loainick']
                    , 'idacc' => $acc
                    , 'name' => $datadb['name']
                    , 'taikhoan' => $value[0]['taikhoan']
                    , 'matkhau' => $value[0]['matkhau']
                    , 'price' => $value[0]['gia']
                    , 'date' => date("H:i Y-m-d"));
                    $this->shop_model->insertdba($datamua, 'lichsumua');
                }
            }

        } else {
            //$data = false;
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }
        $this->load->view('getacc_buy', $data);


    }
}

?>