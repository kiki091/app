<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class ModelAccountManagement extends CI_Model 
{
	public function getData()
	{
		$this->db->select('id, fullname, email, phone, job_desk, last_login', false);
		$this->db->from('employes');
		$this->db->order_by('id', 'desc');
		$this->db->limit('10, 0');
		$res = $this->db->get();
		
		if ($res->num_rows() > 0) return $res->result_array();

		return false;
	}

	public function create($input = '')
    {
        $create = $this->db->insert('employes', array(
			'fullname' => $input['fullname'],
			'email' => $input['email'],
            'phone' => $input['phone'],
            'job_desk' => $input['job_desk'],
            'password' => sha1($input['password']),
            'time_create' => date('Y-m-d H:i:s'),
            'is_active' => '1',
        ));
		
		return $create;
    }
}

/* End of file cms_m.php */
/* Location: ./application/modules/cms/models/cms_m.php */