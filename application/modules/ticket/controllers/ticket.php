<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends Public_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ticket_m');
		
	}

	public function formAddTicketProblem()
	{
		$this->data['code'] = date("mdYsiH");
        $this->data['getCode'] = str_shuffle($this->data['code']);
		
		$this->data['title'] = "Create your problem descriotion";
		$this->template->build('main',$this->data);
	}
	
	public function ListTicketResolved()
	{
		$this->data['title'] = "List Ticket Problem Resolved";
		$this->template->build('resolved',$this->data);
	}

	public function createTicketProblem()
	{
		$this->form_validation->set_rules('code','code','trim|xss_clean');
		$this->form_validation->set_rules('problem_status','Problem Status','trim|xss_clean');
		$this->form_validation->set_rules('category','Problem Category','trim|xss_clean');
		$this->form_validation->set_rules('recipient','Recipient','trim|xss_clean|addslashes|html_entities|htmlspecialchars|strip_tags|max_length[25]');
		$this->form_validation->set_rules('team_viewer_id','Team Viewer ID','trim|xss_clean|addslashes|html_entities|htmlspecialchars|strip_tags|max_length[15]');
		$this->form_validation->set_rules('team_viewer_pass','Team Viewer Password','trim|xss_clean|addslashes|html_entities|htmlspecialchars|strip_tags|max_length[10]');
		$this->form_validation->set_rules('assignee','Assignee To','trim|xss_clean');
		$this->form_validation->set_rules('title','Problem Subject','trim|xss_clean|addslashes|html_entities|htmlspecialchars|strip_tags|max_length[25]');
		$this->form_validation->set_rules('office','Office Name To','trim|xss_clean');
		$this->form_validation->set_rules('description','Problem Description','trim|xss_clean|addslashes|html_entities|htmlspecialchars|strip_tags|max_length[255]');
		
            
        if($this->form_validation->run($this))
		{ 
        	
			if($this->ticket_m->create($this->input->post(NULL, TRUE)))
			{
						
				$this->db->insert('log', array(
					'username' => 'guest',
					'activity_type' => 'add ticket',
					'account_type' => 'guest',
					'level' => 'guest',
					'status' => 'success',
					'message' => 'Title :'. $this->input->post('title'),
					'ip_address' => $this->input->ip_address(),
					'user_agent' => $this->input->user_agent(),
					'created' => date('Y-m-d H:i:s')
				));
				$this->session->set_flashdata('pesan', 'Ticket Problem has been added successful.');
				redirect('/');
			}
			else
			{
				$this->session->set_flashdata('pesan', 'Something went wrong when inserting data into network !!');
				redirect('/');
			}
		}
		else
		{
			redirect('404_override');
		}
	}


}
