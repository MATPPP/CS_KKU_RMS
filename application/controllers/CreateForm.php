<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateForm extends CI_Controller {


	public function index()
	{
		$this->load->view('css');
		$this->load->view('js');
		$this->load->view('create_form');
	}
	public function show(){

		$data = array(
			'name' => $this->input->post('name'),
			'lname' => $this->input->post('lname')
		);
		$this->load->view('form_view',$data);
		//echo '<pre>';
		//print_r($_POST);
		//echo '</pre>';
	}

}
