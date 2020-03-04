<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper('url');
		// Load model
		$this->load->model('User_model');
		$this->load->model('Borrow_model');

	}
	public function userList(){
		// POST data
		$postData = $this->input->post();
		// Get data
		$data = $this->User_model->getUsers($postData);
		echo json_encode($data);
	}
	public function index()
	{
		$this->load->view('test/index');
		$this->load->view('css');
		$this->load->view('js');
	}
	public function borrow($id)
	{

		$data['query']=$this->Borrow_model->showdata();
		$data['query']=$this->Borrow_model->read($id);
		$data['query']=$this->Borrow_model->edit();
		$this->load->view('test/borrow',$data);
		$this->load->view('css');
		$this->load->view('js');
	}
	public function deviceList()
	{

		$this->load->view('test/deviceList');
		$this->load->view('css');
		$this->load->view('js');
	}
	public function formBorrow()
	{
		$this->load->view('test/create_form');
		$this->load->view('css');
		$this->load->view('js');
	}
	public function formDevice()
	{
		$this->load->view('test/deviceList_form');
		$this->load->view('css');
		$this->load->view('js');
	}

	public function show(){

		$data = array(
			'id_std' => $this->input->post('id_std'),
			'name_std' => $this->input->post('name_std'),
			'dept_std' => $this->input->post('dept_std'),
			'tell_std' => $this->input->post('tell_std'),
			'id_device' => $this->input->post('id_device'),
			'name_device' => $this->input->post('name_device'),
			'date_borrow' => $this->input->post('date_borrow'),
			'dateline_return' => $this->input->post('dateline_return'),
		);
		$this->load->view('test/form_view',$data);
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}
}
