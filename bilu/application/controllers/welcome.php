<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->view('welcome_message');
	}
	
	public function save()
	{   
		
		$title=$this->input->post('title');
		$url=$this->input->post('url');
		$tags=$this->input->post('tags');
	 	
		$this->marks_model->save($title,$url,$tags);
		$this->load->view('home');
		
	}
	
	
	public function search()
	{
		$search_item=$this->input->post('search_item');
		
		$query=$this->marks_model->search_tags($search_item);
		echo json_encode($query);
	
	    
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */