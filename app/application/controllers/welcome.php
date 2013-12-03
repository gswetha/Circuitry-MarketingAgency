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
		$this->load->view('home');
		// $this->load->view('welcome_sidescroll');
	}

	public function services()
	{	
		$this->load->helper('url');
		$data['load_type'] = $this->uri->segment(3);
		$this->load->view('services', $data);
	}

	public function example_details()
	{
		$this->load->helper('url');
		$data['example_type'] = $this->uri->segment(3);
		$this->load->view($data['example_type'], $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */