<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class User_Ticket_m extends CI_Model
{
	
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
	
	
    public function getDetailTicket($id)
    {
    	$this->db->select('id, title, code, description, time_create, branch, is_active, assignee, problem_status', false);
		$this->db->from('ticket');
		$this->db->where(array('id' => $id,'is_active'=>'0' ));
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->row_array();

		return false;
    }
	
	public function getDetailProgress($ticket_id= '', $user_id= '')
    {
    	$this->db->select('a.id, a.is_active, b.ticket_id, b.users_id, b.status', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id=a.id');
		$this->db->where(array('b.ticket_id' => $ticket_id,'a.is_active'=>'1', 'b.status'=>'progress', 'b.users_id'=>$user_id ));
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->row_array();

		return false;
    }

    public function getTicketResolved($user_id= '', $job_desk ='')
	{
		$this->db->select('a.id, a.title, a.code, a.description, a.time_create, a.problem_status, a.assignee, a.branch, a.is_active, b.ticket_id, b.status, b.users_id', false);
		$this->db->from('ticket a');
		$this->db->join('ticket_detail b', 'b.ticket_id = a.id', 'left');
		$this->db->where(array('b.status'=>'resolved','b.users_id'=>$user_id, 'a.assignee' => $job_desk));
		$this->db->order_by('a.time_create', 'desc');
		$this->db->limit('10', '0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

    public function insertTicketFromUser($id ='', $user_id= '')
    {
    	$create = $this->db->insert('ticket_detail', array(
    		'ticket_id'	=> $id,
    		'users_id' => $user_id,
    		'time_accept' => date('Y-m-d H:i:s'),
    		'status' => 'progress'
    	));

    	return $create;
    }

    public function UpdateStatusTicketToProgress($id= '')
    {
    	$this->db->where('id',$id);
        $update = $this->db->update('ticket',array('is_active' => '1'));
        return $update;
    }
	
	public function UserAddResolvedTicket($user_id= '', $ticket_id= '')
	{
		$this->db->where(array('ticket_id'=>$ticket_id, 'users_id'=>$user_id));
        $update = $this->db->update('ticket_detail',array('status' => 'resolved', 'time_resolved' => date('Y-m-d H:i:s')));
        return $update;
	}
}