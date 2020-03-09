<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    function getCategoryByID($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id_category',$id);
	    $query = $this->db->get('category');
	    return $query->row();

	  }

	   function getResumeByIDLogin($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id_login',$id);
	    $query = $this->db->get('resume');
	    return $query->row();
	  }

	function getLoginByID($id)
	  {
	    $this->db->select('*');
	    $this->db->where('id_login',$id);
	    $query = $this->db->get('login');
	    return $query->row();

	  }
}