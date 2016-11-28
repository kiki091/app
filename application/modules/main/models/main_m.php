<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Main_m extends CI_Model 
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
	
	public function getTicketPending($start, $limit)
	{
		$this->db->select('id, title, recipient, code, description, time_create, branch, is_active, assignee, problem_status', false);
		$this->db->from('ticket');
		$this->db->where('is_active', '0');
		$this->db->order_by('time_create', 'desc');
		$this->db->limit($limit, $start);
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

	public function getTicketonProgress()
	{
		$this->db->select('a.id, a.title, a.code, a.description, a.time_create, a.problem_status, a.assignee, a.branch, a.is_active, b.ticket_id, b.status', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id = a.id', 'left');
		$this->db->where(array('b.status'=>'progress','a.is_active'=>'1'));
		$this->db->order_by('a.time_create', 'desc');
		$this->db->limit('10', '0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}
	
	public function getTicketonResolved()
	{
		$this->db->select('a.id, a.title, a.code, a.recipient, a.description, a.time_create, a.problem_status, a.assignee, a.branch, a.is_active, b.ticket_id, b.time_resolved, b.status', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id = a.id', 'left');
		$this->db->where(array('b.status'=>'resolved','a.is_active'=>'1'));
		$this->db->order_by('a.time_create', 'desc');
		$this->db->limit('10', '0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}
	
}

/* End of file home_m.php */
/* Location: ./application/modules/home/models/home_m.php */