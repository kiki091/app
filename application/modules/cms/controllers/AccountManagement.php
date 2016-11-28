<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AccountManagement extends Cms_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('ModelAccountManagement');
		$this->load->helper('MY_date_helper');
	}

	public function index()
	{
		$this->data['code'] = date("mdY");
        $this->data['getCode'] = str_shuffle($this->data['code']);
		$this->data['account'] = $this->ModelAccountManagement->getData();

		$this->data['menu_account'] = "active";
		$this->data['title'] = "Account Management System | Support Center";
		$this->template->build('MainAccountManagement',$this->data);
	}

	public function create()
	{
		$this->form_validation->set_rules('password','password','trim|xss_clean');
		$this->form_validation->set_rules('fullname','code','trim|xss_clean|max_length[25]');
		$this->form_validation->set_rules('email','code','trim|xss_clean|max_length[25]');
		$this->form_validation->set_rules('phone','code','trim|xss_clean|max_length[13]');
		$this->form_validation->set_rules('job_desk','Problem Status','trim|xss_clean');

		if($this->form_validation->run($this))
		{
			if($this->ModelAccountManagement->create($this->input->post(NULL, TRUE)))
			{
				$this->db->insert('log', array(
					'username' => 'admin',
					'activity_type' => 'add user',
					'account_type' => 'admin',
					'level' => 'admin',
					'status' => 'success',
					'message' => 'Title : add user',
					'ip_address' => $this->input->ip_address(),
					'user_agent' => $this->input->user_agent(),
					'created' => date('Y-m-d H:i:s')
				));
				$this->session->set_flashdata('pesan', 'User has been added successful.');
				redirect('cms/account');
			}
			else
			{
				$this->session->set_flashdata('pesan', 'Something went wrong when inserting data into network !!');
				redirect('cms/account');
			}
		}
		else
		{
			redirect('404_override');
		}
	}

	
}