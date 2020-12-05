<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home_page_view');
	}

}

/* End of file HomePage.php */
/* Location: ./application/controllers/HomePage.php */