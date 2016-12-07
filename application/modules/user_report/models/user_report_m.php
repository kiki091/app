<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class User_Report_m extends CI_Model
{
	
    public function getTicketResolved($user_id= '')
	{
		$this->db->select('a.id, a.title, a.code, a.description, a.time_create, a.problem_status, a.assignee, a.branch, a.is_active, b.ticket_id, b.status, b.users_id', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id = a.id', 'left');
		$this->db->where(array('b.status'=>'resolved','b.users_id'=>$user_id));
		$this->db->order_by('a.time_create', 'desc');
		$this->db->limit('10', '0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

	public function printByBranchOffice($input ='')
	{
		$day = strtotime($input['day']);
		$perDay = date('Y-m-d',$day);

		$this->db->select('a.id, a.title, a.code, a.description, a.time_create, a.problem_status, a.assignee, a.category, a.recipient, a.branch, a.is_active, b.ticket_id, b.time_accept, b.status, b.time_resolved', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id = a.id', 'left');
		$this->db->where(array('b.status'=>'resolved', 'a.problem_status'=>$input['problem_status'], 'a.category'=>$input['problem_category'], 'a.branch'=>$input['branch_office'] , 'DATE_FORMAT(b.time_resolved,"%Y-%m-%d")'=>$perDay));
		$this->db->order_by('b.time_resolved', 'desc');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

	public function printByMonth($input ='')
	{
		$this->db->select('a.id, a.title, a.code, a.description, a.time_create, a.problem_status, a.assignee, a.category, a.recipient, a.branch, a.is_active, b.ticket_id, b.time_accept, b.status, b.time_resolved', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id = a.id', 'left');
		$this->db->where(array('b.status'=>'resolved', 'a.category'=>$input['problem_category'], 'a.branch'=>$input['branch_office'] , 'DATE_FORMAT(b.time_resolved,"%m")'=>$input['month']));
		$this->db->order_by('b.time_resolved', 'desc');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

}