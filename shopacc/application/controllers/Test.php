<?php
defined('BASEPATH') or exit('No direct script access allowed');

class test extends CI_Controller
{
    public function index ()
    {
        if (!$this->session->userdata("user_profile")) $this->session->set_userdata("user_profile", ['email' => 'admin@gmail.com', 'id' => 123123, 'name' => 'Le Loc', 'cash' => 10000000, 'trangthai' => 0]);
        $data['user_profile'] = $this->session->userdata("user_profile");
        $datadb = $data['user_profile'];
        $id1 = $datadb['id'];
        $email1 = $datadb['email'];
        $name1 = $datadb['name'];
        $this->load->model('m_test');
        $data['user1'] = $this->m_test->checkUser($id1,$email1,$name1) ;


        $lmht = array('loainick' => 'LMHT', 'trangthai' => 'on');

        $data['querylmht'] = $this->db->where($lmht)->order_by('id','desc')->get('baidang');
        $data['lienminh'] = $this->db->where($lmht)->count_all_results("baidang");

        $cf = array('loainick' => 'CF', 'trangthai' => 'on');

        $data['querycf'] = $this->db->where($cf)->order_by("id", "desc")->get("baidang");
        $data['dotkich'] = $this->db->where($cf)->count_all_results("baidang");

        $data['sale'] = $this->db->order_by('uid','desc')->get('lichsumua')->result_array();
        $data['user'] = $this->db->count_all('nguoidung');

        $data['sale'] = $this->db->order_by("uid", "desc")->get("lichsumua")->result_array();


        $this->load->view('V_view', $data);
    }
}