<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Auth extends User_Auth_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m');
		$this->template->set_layout('user_auth');
	}
	
	public function index()
	{
		$this->data['title'] = "LOGIN PAGE";
		$this->template->build('main',$this->data);
	}
	
	public function check_auth()
	{
		$this->form_validation->set_rules('email','Email','trim|xss_clean');
		$this->form_validation->set_rules('password','Password','trim|xss_clean');
		
		if($this->form_validation->run($this))
		{
			$user = $this->auth_m->cekAccountUser($this->input->post(NULL, TRUE));
			$admin = $this->auth_m->cekAccountAdmin($this->input->post(NULL, TRUE));
			if ($user->num_rows() == 1)
			{
				$this->session->sess_destroy();// Destroy old session
				$this->session->sess_create(); // Create a fresh, brand new session
				// Set session data
				foreach ($user->result() as $sess)
				{
					$user_data['EMAIL'] = $sess->email;
					$user_data['JOB_DESK'] = $sess->job_desk;
					$user_data['FULLNAME'] = $sess->fullname;
					$user_data['USER_ID'] = $sess->id;
					$user_data['SESS_USER'] = TRUE;
				}
				//var_dump($user_data);
				$this->session->set_userdata($user_data);
				$this->auth_m->UpdateTimeLoginUser($user_data['EMAIL']);
				
				$this->db->insert('log', array(
					'username' => $user_data['FULLNAME'],
					'activity_type' => 'login',
					'account_type' => 'user',
					'level' => 'employes',
					'status' => 'success',
					'message' => 'Title : Login Success',
					'ip_address' => $this->input->ip_address(),
					'user_agent' => $this->input->user_agent(),
					'created' => date('Y-m-d H:i:s')
				));
				
				$this->session->sess_update($user_data);
				redirect('dashboard');
			}
			elseif ($admin->num_rows() == 1) 
			{
				$this->session->sess_destroy();// Destroy old session
				$this->session->sess_create(); // Create a fresh, brand new session
				// Set session data
				foreach ($admin->result() as $sess)
				{
					$user_data['E_MAIL'] = $sess->email;
					$user_data['FULL_NAME'] = $sess->fullname;
					$user_data['ME_ID'] = $sess->id;
					$user_data['SESS_ADMIN'] = TRUE;
				}
				//var_dump($user_data);
				$this->session->set_userdata($user_data);
				$this->auth_m->UpdateTimeLoginAdmin($user_data['E_MAIL']);
				
				$this->db->insert('log', array(
					'username' => $user_data['FULL_NAME'],
					'activity_type' => 'login administrator',
					'account_type' => 'admin',
					'level' => 'admin',
					'status' => 'success',
					'message' => 'Title : Login Success',
					'ip_address' => $this->input->ip_address(),
					'user_agent' => $this->input->user_agent(),
					'created' => date('Y-m-d H:i:s')
				));
				
				$this->session->sess_update($user_data);
				redirect('cms');
			}

			else
			{
				$this->session->set_flashdata('pesan', 'Login Failed, Chech Your Email Or Password.');
				redirect('login');
			}
		}
		else
		{
			redirect('404_override');
		}
	}
	
	public function auth_logout()
	{
		$this->session->unset_userdata(array(
			$user_data['EMAIL'] = $sess->email,
			$user_data['JOB_DESK'] = $sess->job_desk,
			$user_data['FULLNAME'] = $sess->fullname,
			$user_data['USER_ID'] = $sess->id,
			$user_data['SESS_USER'] = FALSE,
		));
		$this->session->sess_destroy();
		$this->auth_m->logout();
		redirect('login');
	}

	public function admin_logout()
	{
		$this->session->unset_userdata(array(
			$user_data['E_MAIL'] = $sess->email,
			$user_data['FULL_NAME'] = $sess->fullname,
			$user_data['ME_ID'] = $sess->id,
			$user_data['SESS_ADMIN'] = FALSE,
		));
		$this->session->sess_destroy();
		$this->auth_m->logout();
		redirect('login');
	}
	
}