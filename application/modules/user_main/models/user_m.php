<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class User_m extends CI_Model
{
    public function getTotalTicketPending($job_desk ='')
	{
		$this->db->where(array('is_active'=> '0', 'assignee'=>$job_desk));
		return $this->db->count_all_results('ticket');
	}
    
    public function getTotalTicketOnProgress($user_id ='')
	{
		$this->db->where(array('status'=> 'progress', 'users_id'=>$user_id ));
		return $this->db->count_all_results('ticket_detail');
	}
    
    public function getTotalTicketFinished($user_id ='')
	{
		$this->db->where(array('status'=> 'resolved', 'users_id'=>$user_id ));
		return $this->db->count_all_results('ticket_detail');
	}
    
    public function getTicketPending($job_desk ='')
	{
		$this->db->select('id, title, code, description, recipient, time_create, branch, is_active, assignee, problem_status', false);
		$this->db->from('ticket');
		$this->db->where(array('is_active'=> '0', 'assignee'=>$job_desk));
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