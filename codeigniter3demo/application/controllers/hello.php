<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		echo 'codeigniter3demo Hello Controller/index';
	}

	public function other() {
		echo 'codeigniter3demo hello Controller/other';
	}
}
