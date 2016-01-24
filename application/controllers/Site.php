 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
		
		$this->load->helper('url');
		
	}
	
	public function post()
	{
		$this->load->view('header');
		$this->load->view->post->templates('homepage');
		$this->load->view('footer');
		
		$this->load->helper('url');
	}
	
	
}