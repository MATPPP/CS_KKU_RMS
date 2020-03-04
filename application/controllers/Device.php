<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		// Load model
		$this->load->model('User_model');
		$this->load->model('Borrow_model');

	}
	public function index()
	{
		$data['query']=$this->Borrow_model->showdata();
		$this->load->view('test/borrow',$data);
		$this->load->view('css');
		$this->load->view('js');
	}
	public function formBorrow()
	{
		//$this->form_validation->set_rules('id_std','id_std','required');
		//$this->form_validation->set_rules('name_std','name_std','required');
		//$this->form_validation->set_rules('dept_std','dept_std','required');
		//$this->form_validation->set_rules('tell_std','tell_std','required');
		//$this->form_validation->set_rules('id_device','id_device','required');
		//$this->form_validation->set_rules('name_device','name_device','required');
		//$this->form_validation->set_rules('date_borrow','date_borrow','required');
		//$this->form_validation->set_rules('dateline_return','dateline_return','required');
		//if($this->form_validation->run() == FALSE)
		//{

			//$this->load->view('test/create_form');
		//}
		//else{
			//$this->load->view('test/borrow');

		//}
		$this->load->view('test/create_form');
		$this->load->view('css');
		$this->load->view('js');

	}
	public function deviceList()
	{

		$this->load->view('test/deviceList');
		$this->load->view('css');
		$this->load->view('js');
	}
	public function edit($id)
	{
		$data['query']=$this->Borrow_model->read($id);
		$this->load->view('test/edit_form',$data);
		$this->load->view('css');
		$this->load->view('js');
	}
	public function borrowList(){

		$data['query']=$this->Borrow_model->showdata();
		$this->load->view('test/borrowList',$data);
		$this->load->view('css');
		$this->load->view('js');


	}
	public function adding(){

		$this->Borrow_model->addBorrow();
		redirect('borrow','refresh');

	}
	public function editdata(){

		$this->Borrow_model->editBorrow();
		redirect('borrow','refresh');

	}
	public function delete($id){

		$this->Borrow_model->deleteBorrow($id);
		redirect('borrow','refresh');

	}

}
