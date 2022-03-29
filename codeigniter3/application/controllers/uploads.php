<?php
class Uploads extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['errors'] = '';
		$this->load->view('uploads_view',$data);
	}

	public function doupload() {
		if($this->input->post('ok'))
		{	// cấu hình:
			$config['upload_path'] = './uploads/';
			$config["allowwed_types"] = 'gif|jpg|png';
			$config['max_size'] = '900';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';
			// tải thư viện upload và gắn cấu hình
			$this->load->library("upload", $config);
			// thực thi việc upload:
			if($this->upload->do_upload('img')){
				echo "Upload oke";
				$check = $this->upload->data();
				echo "<pre>";
				echo print_r($check);
				echo "<pre>";
			}
			else{
				$data['errors'] = $this->upload->display_errors();
				$this->load->view("upload_view",$data);
		}
		}
	}
}
