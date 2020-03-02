<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeviceListForm extends CI_Controller {


	public function index()
	{
		$this->load->view('css');
		$this->load->view('js');
		$this->load->view('deviceList_form');
	}
	public function show(){


	}

}
