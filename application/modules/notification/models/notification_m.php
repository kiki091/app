<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

	class Notification_m extends CI_Model
	{
		var $table = 'ticket';

		public function getTotalNotification($job_desk ='')
		{
			$this->db->where(array('is_active'=> '0', 'assignee' => $job_desk));
			return $this->db->count_all_results('ticket');
		}

		public function getListNotification($job_desk ='')
		{
			$this->db->select('id, title, time_create, branch, is_active, assignee, problem_status', false);
			$this->db->from('ticket');
			$this->db->where(array('is_active' =>'0', 'assignee' => $job_desk));
			$this->db->order_by('time_create', 'desc');
			$this->db->limit('10', '0');
			$res = $this->db->get();
			
			if ($res->num_rows() > 0) return $res->result_array();

			return false;
		}
	}