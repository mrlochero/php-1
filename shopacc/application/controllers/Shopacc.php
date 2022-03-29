<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Shopacc extends CI_Controller
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


        $user = $this->facebook->getUser();

        if ($user) {
            try {
                if (!$this->session->userdata("user_profile")) $this->session->set_userdata("user_profile", ['email' => 'admin@gmail.com', 'id' => 123123, 'name' => 'Le vinh Loc', 'cash' => 10000000, 'trangthai' => 0]);
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
        } else {
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }

        if ($user) {
            $emaila = "";
            $datadb = $data['user_profile'];
            if (isset($datadb['email'])) $emaila = $datadb['email'];
            $getuserif = $this->shop_model->checkUser($datadb['id'], $emaila, $datadb['name']);
            $data['money'] = $getuserif[0]['cash'];
            if ($getuserif[0]['trangthai'] == 0) $data['admin'] = true;
            $data['logout_url'] = site_url('shopacc/logout'); // Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = site_url();
        }

        $lmht = array('loainick' => 'LMHT', 'trangthai' => 'on');

        $data['querylmht'] = $this->db->where($lmht)->order_by("id", "desc")->get("baidang");
        $data['lienminh'] = $this->db->where($lmht)->count_all_results("baidang");

        $cf = array('loainick' => 'CF', 'trangthai' => 'on');

        $data['querycf'] = $this->db->where($cf)->order_by("id", "desc")->get("baidang");
        $data['dotkich'] = $this->db->where($cf)->count_all_results("baidang");

        $data['user'] = $this->db->count_all('nguoidung');


        $data['memonline'] = $this->shop_model->getAmungStats("fa3k1r2sr3fg");
        $data['useronline'] = $this->shop_model->getAmungStats("dmrfqe4prez6");

        $this->load->view('shopacc_views', $data);

    }

    public function logout()
    {

        $this->load->library('facebook');

        // Logs off session from website
        $this->session->sess_destroy();
        $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect(base_url());
    }
}
