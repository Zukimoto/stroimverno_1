<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foto extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('foto');
		$this->load->view('footer');
		$this->load->helper('url');
		
	}
	
	
}