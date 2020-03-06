<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Worker_profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Worker/M_profile');		
	}

	public function index()
	{
	    $data = array(
	    	'data_profil' => $this->M_profile->get_user_by_id()
	    );
	    $this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Worker_new/ProfilWorker_view', $data);
		$this->load->view('Element/Panel/footer');	
	}
}