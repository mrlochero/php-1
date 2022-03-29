<?php
class Nguoi_dung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_nguoi_dung');

    }

    public function danhsach()
    {
        $dsnd = $this->m_nguoi_dung->ds_nguoi_dung();
        $data['dsnd'] = $dsnd;
        $this->load->view('',$data);
    }

    public function get_db()
    {   //selct * from mytable limit 20,10
        $this->db->get('my_table',10,20);

    }

    public function get_db2() {
        //select title,content,data FROM mytable
        $this->db->select('title,content,data');
        $query = $this->db->get('mytable');
    }

    public function form ()
    {
        $this->load->view('form_test');
    }
}
