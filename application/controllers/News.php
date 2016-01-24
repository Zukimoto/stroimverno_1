<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->model('news_model');
		//$this->load->helper('form');
		
    }

    public function index()
    {

        $data['news'] = $this->news_model->get_news();
        //$data['title'] = 'News archive';

        //$this->load->view('templates/header', $data);
		$this->load->view('header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('footer');
    }

    
	//public function view($slug)
    //{
    //    $data['news'] = $this->news_model->get_news($slug);
    //}    
    public function view($slug = NULL)
{
        $data['news_item'] = $this->news_model->get_news($slug);

        if (empty($data['news_item']))
        {
                show_404();
        }

        $data['title'] = $data['news_item']['title'];
		

        $this->load->view('header', $data);
        $this->load->view('news/view', $data);
        $this->load->view('footer');
    }
public function create()
{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('slug', 'slug', 'required');
		$this->form_validation->set_rules('text', 'text', 'required');
    //$data['title'] = 'Create a news item';

    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('templates/header1');
        $this->load->view('news/create');
        $this->load->view('footer');

    }
    else
    {
        $this->news_model->set_news();
     
		redirect('/news/', 'refresh');
		
		
    }
	
}
	
}