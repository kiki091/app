<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Global_m extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
	
	public function getAccount($user_id ='')
    {
        $this->db->select('fullname, email, job_desk, phone');
        $this->db->from('employes');
        $this->db->where('id', $user_id);
            
        $res = $this->db->get();
            
        if ($res->num_rows() > 0) return $res->row_array();
        return false;
    }

    public function getOfficeName()
    {
        $this->db->select('id, office_name');
        $this->db->from('branch_office');
        $this->db->order_by('regional','asc');
            
        $res = $this->db->get();
            
        if ($res->num_rows() > 0) return $res->result_array();
        return false;
    }

    public function getBranchOffice()
    {
        $this->db->select('id, regional');
        $this->db->from('branch_office');
        $this->db->order_by('regional','asc');
            
        $res = $this->db->get();
            
        if ($res->num_rows() > 0) return $res->result_array();
        return false;
    }

    public function getProblemCategory()
    {
        $this->db->select('id, category, create_at');
        $this->db->from('problem_category');
        $this->db->order_by('create_at','asc');
            
        $res = $this->db->get();
            
        if ($res->num_rows() > 0) return $res->result_array();
        return false;
    }

    public function getProblemStatus()
    {
        $this->db->select('id, status, create_at');
        $this->db->from('problem_status');
        $this->db->order_by('create_at','asc');
            
        $res = $this->db->get();
            
        if ($res->num_rows() > 0) return $res->result_array();
        return false;
    }

	
}
/* End of file global_m.php */
/* Location: ./application/models/global_m.php */