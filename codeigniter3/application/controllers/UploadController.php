<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UploadController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));
	}
	public function index()
	{
		$this->load->view("upload_view");
	}
}
?>
