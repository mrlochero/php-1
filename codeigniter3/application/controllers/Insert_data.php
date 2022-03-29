<?php
class Insert_data extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// load db
		$this->load->database();
		//load model
		$this->load->model('Insert_model');
	}

	//Insert
	public function savedata()
	{
		//load registration view form
		$this->load->view('insert');

		//check sumbmit button
		if($this->input->post('dangky') ) {
			// set value to input
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');

			$this->Insert_model->saverecords($first_name, $last_name, $username, $email, $phone);
			echo '<script language="javascript">alert("Đã tạo thành viên thành công!");</script>';
		}

	}
}
