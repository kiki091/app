<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth_m extends CI_Model 
{
    public function cekAccountUser($input = '')
    {
        $query = $this->db->get_where('employes', array(
            'email' => $input['email'],
            'password' => sha1($input['password'])
        ));
		return $query;
    }

    public function cekAccountAdmin($input = '')
    {
        $query = $this->db->get_where('administrator', array(
            'email' => $input['email'],
            'password' => sha1($input['password'])
        ));
		return $query;
    }
	
	public function UpdateTimeLoginUser($EMAIL ='')
	{
		$this->db->where('email',$EMAIL);
        $update = $this->db->update('employes',array(
            'last_login'=> date('Y-m-d H:i:s')
        ));
		return $update;
	}

	public function UpdateTimeLoginAdmin($E_MAIL ='')
	{
		$this->db->where('email',$E_MAIL);
        $update = $this->db->update('administrator',array(
            'last_login'=> date('Y-m-d H:i:s')
        ));
		return $update;
	}
	
	public function logout() {
		$this->db->delete('ci_sessions', array('session_id' => $this->input->post('session_id')));
		return true;        
	}
}