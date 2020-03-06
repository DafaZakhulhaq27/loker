<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_worker extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION["logged_in"] != TRUE) {
			redirect("Landing");
		}
        $this->load->model('Owner/M_vacancy','M_vacancy');		
        $this->load->model('Owner/M_paket','M_paket');						        		
	}

	public function index()
	{
    	$this->M_vacancy->cek_closing_date();     
    	$this->M_paket->cek_expired();   

    	$data = array();

		$this->load->view('Element/Panel/head');
		$this->load->view('Element/Panel/header');
		$this->load->view('Element/Panel/navbar');
		$this->load->view('Worker_new/BerandaWorker_view', $data);
		$this->load->view('Element/Panel/footer');
        	
	}

}
