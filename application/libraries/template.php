<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template {
	function page_view()
	{
		$CI = & get_instance();
 
		$CI->load->view('about');
		$CI->load->view('blocks/header_view');
		$CI->load->view('blocks/content_view');		
		$CI->load->view('blocks/footer_view');
	}	
}