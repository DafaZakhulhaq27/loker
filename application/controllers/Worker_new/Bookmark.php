<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmark extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Worker/M_bookmark');						
	}

	public function index()
	{
		
		$data = array(
			'data_bookmark' => $this->M_bookmark->get_bookmark()
		);

		$this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Worker_new/Bookmark_view', $data);
		$this->load->view('Element/Panel/footer');		
	}
}