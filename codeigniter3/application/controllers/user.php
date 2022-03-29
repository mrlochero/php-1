<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	/*
	* Phuong thuc dang ky thanh vien
	*/
	public function register()
	{
		//load thu vien validation
		$this->load->library('form_validation');
		$this->load->helper('form');
		//tao cac tap luat
		//email: bắt buộc - đúng định dạng email
		$this->form_validation->set_rules('email', 'Email',
			'required|valid_email|xss_clean');

		//name: bắt buộc - tối thiểu 8 ký tự
		$this->form_validation->set_rules('name', 'Họ và tên',
			'required|min_length[8]|xss_clean');
		//phone: bắt buộc - tối thiểu 8 ký tự - phai la số
		$this->form_validation->set_rules('phone', 'Số điện thoại',
			'required|min_length[8]|numeric|xss_clean');
		//password: bắt buộc - tối thiểu 6 ký tự - phai la số
		$this->form_validation->set_rules('password', 'Mật khẩu',
			'required|min_length[6]|numeric|xss_clean');
		//re_password: bắt buộc - phải giống với password
		$this->form_validation->set_rules('re_password', 'Nhập lại mật khẩu',
			'required|matches[password]|xss_clean');
		//chạy và kiểm tra các tập luật
		if ($this->form_validation->run()) {
			//các dữ liệu nhập hợp lệ
			//đăng ký thành viên thành công
		}
		//hiển thị view
		$this->load->view('user');
	}

	public function register2()
	{
		// load thư viện validation
		$this->load->library('form_validation');
		$this->load->helper('form');

		// tạo các tập luật
		// name: bắt buộc nhập -  tối thiểu 8 ký tự
		$this->form_validation->set_rules('username', 'họ tên', 'required|min_length[2]');
		// pass : bắt buộc nhập - tối thiểu 6 ký tự - phải là số
		$this->form_validation->set_rules('password','Mật khẩu','required|min_length[2]|numeric');
		// kiểm tra và chạy các tập luật nếu đúng
		if ($this->form_validation->run())
		{
			// các dữ liệu nhập hợp lệ
			// đăng ký thành công
			echo '<script method="javascript"> alert("đăng ký thành viên thành công") </script>';
		}
		// hiển thị ra view
		$this->load->view('user');
	}
}
