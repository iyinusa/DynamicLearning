<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutors extends CI_Controller {
	
	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		redirect(base_url(), 'refresh');
		
		$data['title'] = 'Find Tutor | '.app_name;
		$data['page_active'] = 'tutor';
		
		$this->load->view('designs/header', $data);
		$this->load->view('tutors', $data);
		$this->load->view('designs/footer', $data);
	}
}
