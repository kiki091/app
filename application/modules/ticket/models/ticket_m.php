<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Ticket_m extends CI_Model 
{
	public function create($input = '')
    {
        $create = $this->db->insert('ticket', array(
			'code'              => $input['code'],
			'problem_status'    => $input['problem_status'],
            'assignee'          => $input['assignee'],
            'title'             => $input['title'],
            'category'          => $input['category'],
            'recipient'         => $input['recipient'],
            'team_viewer_id'    => $input['team_viewer_id'],
            'team_viewer_pass'  => $input['team_viewer_pass'],
            'branch'            => $input['branch'],
            'office_name'       => $input['office'],
            'description'       => $input['description'],
            'time_create'       => date('Y-m-d H:i:s'),
            'ip_address'        => $this->input->ip_address(),
            'is_active'         => '0',
        ));
		
		return $create;
    }
}