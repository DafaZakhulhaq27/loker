<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('M_login');		
	}
      public function randomString($length = 100) {
	      $str = "";
	      $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	      $max = count($characters) - 1;
	      for ($i = 0; $i < $length; $i++) {
	        $rand = mt_rand(0, $max);
	        $str .= $characters[$rand];
	      }
	      return $str ;
      }
  //LOGIN
	/*  public function do_login()
	  {
	    if($this->session->userdata('logged_in') == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');  					
			  	  redirect('Worker/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}		    
			} else {
	        if($this->M_login->user_check() == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Worker/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}	        	
	        } else {
	          $this->session->set_flashdata('notif', 'Usernamae atau password salah!, cek kembali username dan password anda');
	          $this->session->set_flashdata('type', 'error');
	          redirect('Landing');
	        }
	      }
	   }*/

	   //login new
	    public function do_login()
	  {
	    if($this->session->userdata('logged_in') == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');  					
			  	  redirect('Worker_new/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner_new/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}		    
			} else {
	        if($this->M_login->user_check() == TRUE){
				if($this->session->userdata('level') == 1){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Worker_new/Dashboard_worker');
				}elseif($this->session->userdata('level') == 2){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Owner_new/Dashboard_owner');
				}elseif($this->session->userdata('level') == 3){
		          $this->session->set_flashdata('type', 'login');					
			  	  redirect('Admin/Data_user');
				}	        	
	        } else {
	          $this->session->set_flashdata('notif', 'Usernamae atau password salah!, cek kembali username dan password anda');
	          $this->session->set_flashdata('type', 'error');
	          redirect('Landing');
	        }
	      }
	   }


	  public function logout(){
	    if($this->session->userdata('logged_in') == TRUE){
				$this->session->sess_destroy();		

		          redirect('Landing');
	    }
	  }	   
// LOGIN


// REGISTER 
   public function create_user()
    {

            if($this->M_login->cek_user() == TRUE ){
	            if($this->input->post('password') == $this->input->post('password_ver') ){
	            	  //EMAIL

	            	$config = [
		               'useragent' => 'CodeIgniter',
		               'protocol'  => 'smtp',
		               'mailpath'  => '/usr/sbin/sendmail',
		               'smtp_host' => 'sdm.apsintegra.co.id',
		               'smtp_user' => 'noreply@sdm.apsintegra.co.id',   // Ganti dengan email gmail Anda.
		               'smtp_pass' => 'Asdasd123098!',             // Password gmail Anda.
		               'smtp_port' => 465,
		               'smtp_keepalive' => TRUE,
		               'smtp_crypto' => 'ssl',
		               'wordwrap'  => TRUE,
		               'wrapchars' => 80,
		               'mailtype'  => 'html',
		               'charset'   => 'utf-8',
		               'validate'  => TRUE,
		               'crlf'      => "\r\n",
		               'newline'   => "\r\n",
		           ];

			        // Load library email dan konfigurasinya.
			         $this->email->initialize($config);

			        $token = $this->randomString() ;
			        $to_mail = $this->input->post('email') ;
			        $from_email = "noreply@sdm.apsintegra.co.id";
			        $this->email->from($from_email, 'Loker');
			        $this->email->to($to_mail);
			        $this->email->subject('Verifikasi Akun Loker');
			        $this->email->message('<h1>Silakan verifikasi akun untuk bisa menikmati fitu-fitur loker </h1>silahkan klik link berikut <a href="'.base_url().'Auth/ver_email/'.$token.'">Klik Disini</a></p>');
			        $this->email->set_mailtype('html');
	            	  //EMAIL	 
		            if($this->email->send()){	            	
		            	if($this->M_login->create_user($token) == TRUE ){
			         		  $this->session->set_flashdata('notif', 'Selamat anda berhasil terdaftar, periksa email anda dan lakukan verifikasi');
			                  $this->session->set_flashdata('type', 'success');
				        	  redirect('Landing');
 		                }else{
		                  $this->session->set_flashdata('notif', 'gagal mendaftar');
		                  $this->session->set_flashdata('type', 'error');                
			        	  redirect('Landing');
		                }

				          }else{
				          	//var_dump($this->email->print_debugger());exit();
				              $this->session->set_flashdata('notif', 'Failed Send Mail');
				              $this->session->set_flashdata('type', 'error');
				     		 redirect('Landing');
				          }
	            }else{
	                  $this->session->set_flashdata('notif', 'Password satu dengan yang lain tidak sama, mohon cek kembali password anda');
	                  $this->session->set_flashdata('type', 'error');                
		        	  redirect('Landing');
	            }
            }else {
                $this->session->set_flashdata('notif', 'Email sudah terdaftar');
                $this->session->set_flashdata('type', 'error');
	        	  redirect('Landing');
            }

    }
	  public function ver_email()
	  {

	        if($this->M_login->cek_token_email() == TRUE){
		        if($this->M_login->ver_status_email() == TRUE){
						  $this->session->unset_userdata('status_resume');
						  $this->session->set_userdata('status_email_ver','1');		        	
		        	$this->session->set_flashdata('notif', 'Selamat, akun Anda sudah terverifikasi. silahkan login');
			        $this->session->set_flashdata('type', 'success');
				   	redirect('Landing');
		        } else {
		          $this->session->set_flashdata('notif', 'gagal ubah status ver email');
		          $this->session->set_flashdata('type', 'error');
		          redirect('Landing');
		        }	        	

	        } else {
	          $this->session->set_flashdata('notif', 'Token salah, silakan lakukan registrasi ulang');
	          $this->session->set_flashdata('type', 'error');
	          redirect('Landing');
	        }
	   }    
// REGISTER

 	   
}
