<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{

	public $itemCRUD;

	/**
	 * Get All Data from this method.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ItemModel');

		$this->itemCRUD = new ItemModel;
	}

	/**
	 * Hien thi tat ca data
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['data'] = $this->itemCRUD->get_items();

		$this->load->view('theme/header');
		$this->load->view('items/list', $data);
		$this->load->view('theme/footer');
	}

	/**
	 * Hien thi chi tiet item
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$item = $this->itemCRUD->find_item($id);

		$this->load->view('theme/header');
		$this->load->view('items/show', array('item' => $item));
		$this->load->view('theme/footer');
	}

	/**
	 * Tao moi item
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->load->view('theme/header');
		$this->load->view('items/create');
		$this->load->view('theme/footer');
	}

	/**
	 * Luu tru item
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('item/create'));
		} else {
			$this->itemCRUD->insert_item();
			redirect(base_url('item'));
		}
	}

	/**
	 * Sua item
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$item = $this->itemCRUD->find_item($id);
		$this->load->view('theme/header');
		$this->load->view('items/edit', array('item' => $item));
		$this->load->view('theme/footer');
	}

	/**
	 * Cap nhat item
	 *
	 * @return Response
	 */
	public function update($id)
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('item/edit/' . $id));
		} else {
			$this->itemCRUD->update_item($id);
			redirect(base_url('item'));
		}
	}

	/**
	 * Xoa item
	 *
	 * @return Response
	 */
	public function delete($id)
	{
		$item = $this->itemCRUD->delete_item($id);
		redirect(base_url('item'));
	}
}
