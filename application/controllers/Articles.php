<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('aricles');
		$this->load->view('footer');
		$this->load->helper('url');
		
	}
	
	
}