<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['title'] = 'About Us | '.app_name;
		$data['page_active'] = 'about';
		
		$this->load->view('designs/header', $data);
		$this->load->view('about', $data);
		$this->load->view('designs/footer', $data);
	}
}
