<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {


	public function index()
	{
		$this->load->view('hello_view');
	}
	public  function index2(){
		$this->load->view('css');
		$this->load->view('js');
		$this->load->view('index2_view');
	}
}
