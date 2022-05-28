<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['title'] = 'Contact Us | '.app_name;
		$data['page_active'] = 'contact';
		
		$this->load->view('designs/header', $data);
		$this->load->view('contact', $data);
		$this->load->view('designs/footer', $data);
	}
}
