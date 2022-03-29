<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lichsu extends CI_Controller
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
        $this->session->set_userdata("user_profile", ['email' => 'admin@gmail.com', 'id' => 123123, 'name' => 'Le Loc']);
        $user = $this->session->userdata("user_profile");

        if ($user) {
            try {
                $data['user_profile'] = $this->session->userdata("user_profile");
            } catch (FacebookApiException $e) {
                $user = null;
            }
        } else {
            redirect(base_url());
            // Solves first time login issue. (Issue: #10)
            //$this->facebook->destroySession();
        }

        if ($user) {
            $emaila = "";
            if (isset($datadb['email'])) $emaila = $datadb['email'];
            $datadb = $data['user_profile'];
            $getuserif = $this->shop_model->checkUser($datadb['id'], $emaila, $datadb['name']);
            $data['money'] = $getuserif[0]['cash'];
            $data['logout_url'] = site_url('shopacc/logout'); // Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url(),
                'scope' => array("email") // permissions here
            ));
        }

        $data['query'] = $this->shop_model->getHis($datadb['id']);
        $data['querynap'] = $this->shop_model->getHisnap($datadb['id']);
        if ($getuserif[0]['trangthai'] == 0) {
            $data['queryall'] = $this->shop_model->getHisall();
            $data['querynapall'] = $this->shop_model->getHisnapall();
            $data['admin'] = true;
        }
        $this->load->view('lichsugiaodich', $data);
    }


}

	
	
	