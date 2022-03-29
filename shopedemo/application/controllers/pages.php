<?php
class Pages extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    public function index()
    {

        $config['total_rows'] = 3;
        $config['base_url'] = "/shopedemo/pages";
        $config['per_page'] = 3;

        $this->load->library('pagination', $config);
        echo $this->pagination->create_links();
        echo" pages";
    }
}