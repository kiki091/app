<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class User_m extends CI_Model
{
    public function getTotalTicketPending()
	{
		$this->db->where('is_active', '0');
		return $this->db->count_all_results('ticket');
	}
    
    public function getTotalTicketOnProgress()
	{
		$this->db->where('status', 'progress');
		return $this->db->count_all_results('ticket_detail');
	}
    
    public function getTotalTicketFinished()
	{
		$this->db->where('status', 'resolved');
		return $this->db->count_all_results('ticket_detail');
	}
    
    public function getTicketPending()
	{
		$this->db->select('id, title, code, description, time_create, branch, is_active, assignee, problem_status', false);
		$this->db->from('ticket');
		$this->db->where('is_active', '0');
		$this->db->order_by('time_create', 'desc');
		$this->db->limit('10', '0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

	function getTicketProgress($user_id ='', $job_desk ='')
	{
		$this->db->select('a.id, a.title, a.code, a.description, a.time_create, a.branch, a.is_active, a.assignee, a.problem_status, b.ticket_id, b.users_id, b.status, c.id, c.fullname, c.job_desk', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id=a.id');
		$this->db->join('employes c', 'c.id=b.users_id');
		$this->db->where(array('a.is_active'=>'1','b.users_id'=>$user_id, 'b.status' => 'progress', 'a.assignee' => $job_desk));
		$this->db->order_by('a.time_create', 'desc');
		$this->db->limit('10', '0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

}