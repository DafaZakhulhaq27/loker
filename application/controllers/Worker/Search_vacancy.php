<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_vacancy extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Worker/M_search');	
        $this->load->model('M_master');						
	}

	public function index()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
   		    $data['data_category'] = $this->M_search->get_category();    
   		    $data['data_kab'] = $this->M_search->get_kabupaten2();
   		    $data['main_view'] 		= 'Worker/Search_vacancy_view';
			$this->load->view('Index',$data);
        } else {
	          redirect('Landing');
        }		
	}
	public function get_vacancy_by_search()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
        		$this->load->library('pagination') ;

        		$config['base_url'] = base_url().'Worker/Search_vacancy/get_vacancy_by_search' ;
        		$config['total_rows'] = $this->M_search->get_vacancy_total_record() ;
        		$config['per_page'] = 6 ;
        		$config['uri_segment'] = 4;
				$choice = $config["total_rows"] / $config["per_page"];
				$config["num_links"] = floor($choice);

				$config['first_link']       = 'First';
				$config['last_link']        = 'Last';
				$config['next_link']        = 'Next';
				$config['prev_link']        = 'Prev';
				$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
				$config['full_tag_close']   = '</ul></nav></div>';
				$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
				$config['num_tag_close']    = '</span></li>';
				$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
				$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
				$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
				$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['prev_tagl_close']  = '</span>Next</li>';
				$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
				$config['first_tagl_close'] = '</span></li>';
				$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
				$config['last_tagl_close']  = '</span></li>';
        		$this->pagination->initialize($config) ;
        		$start = $this->uri->segment(4,0) ;

        		$rows = $this->M_search->get_vacancy_by_search($config['per_page'],$start) ;
	   		    $data['cek_daftar'] = $this->M_search->cek_vacancy_applied();

	   		    $data['data_category'] = $this->M_search->get_category();    
	   		    $data['data_kab'] = $this->M_search->get_kabupaten2();
	   		    $data['data_vacancy'] = $rows ;   
	   		    $data['pagination'] = $this->pagination->create_links() ;   
	   		    $data['start'] = $start ;   
	   		    $data['main_view'] 		= 'Worker/Get_vacancy_search_view';
				$this->load->view('Index',$data);
        	}else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker');
        	}

        } else {
	          redirect('Landing');
        }		
	}

	// VACANCY APPLIED
   public function input_vacancy_applied()
    {

        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
        		if($this->M_search->cek_vacancy_applied() == TRUE )
        		{
			          if($this->M_search->input_vacancy_applied() == TRUE ){
						  $this->session->set_flashdata('notif', 'Anda sudah terdaftar di lowongan tersebut');
		                  $this->session->set_flashdata('type', 'success');
			        	  redirect('Worker/Search_vacancy/get_vacancy_applied');
	 	               }else{
						  $this->session->set_flashdata('notif', 'gagal');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Search_vacancy');
			           }	        	  	

        		}else{
						  $this->session->set_flashdata('notif', 'Anda sudah terdaftar di lowongan tersebut, tunggu saja kabar selanjutnya');
			              $this->session->set_flashdata('type', 'error');                
			        	  redirect('Worker/Search_vacancy');

        		}
	      }else{
		      	$this->session->set_flashdata('notif', 'lengkapi profile / resume terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker') ;
	      }

            }else {
			    redirect('Landing');
            }

    }
	public function get_vacancy_applied()
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
			$this->M_search->read() ;        	        		
   		    $data['get_vacancy_applied'] = $this->M_search->get_vacancy_applied();
   		    $data['main_view'] 		= 'Worker/Vacancy_applied_view';
			$this->load->view('Index',$data);	
	      }else{
		      	$this->session->set_flashdata('notif', 'lengkapi profile / resume terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker') ;
	      }        		
        } else {
	          redirect('Landing');
        }		
	}   
	public function get_vacancy_by_id($id)
	{
        if($this->session->userdata('logged_in') == TRUE && $this->session->userdata('level') == 1){
        	if($this->session->userdata('status_profile') == '1' && $this->session->userdata('status_resume') == '1' && $this->session->userdata('status_email_ver') == '1'){
   		    $data['get_vacancy_by_id'] = $this->M_search->get_vacancy_by_id($id);
   		    $data['main_view'] 		= 'Worker/Vacancy_by_id_view';
			$this->load->view('Index',$data);	
	      }else{
			    $this->session->set_flashdata('notif', 'Lengkapi resume / profile / verifikasi email terlebih dahulu');
			    $this->session->set_flashdata('type', 'error');                
		       	redirect('Worker/Dashboard_worker') ;
	      }        		
        } else {
	          redirect('Landing');
        }		
	}  
	// VACANCY APPLIED

}
