<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class User_Ticket extends User_Controller
    {
        public function __construct()
		{
			parent::__construct();
			$this->load->model('user_ticket_m');
			$this->template->set_layout('default');
		}

		public function index()
		{
			$this->data['title'] = 'PROBLEM LIST';
			$this->template->build('main',$this->data);
		}

		public function LoadDataTicketForAccept()
		{
			$this->data['ticket_pending'] = $this->user_ticket_m->getTicketPending();
			$this->load->view('TableTicketPending',$this->data);
		}

		public function UserAcceptTicket($id)
		{
			$this->data['getTicketDetail'] = $this->user_ticket_m->getDetailTicket($id);

			if(isset($this->data['getTicketDetail']))
			{
				$this->data['InputTicketForUser'] = $this->user_ticket_m->insertTicketFromUser($this->data['getTicketDetail']['id'], $this->data['user_id']);
				$this->data['UpdateStatusTicket'] = $this->user_ticket_m->UpdateStatusTicketToProgress($this->data['getTicketDetail']['id']);

				$this->db->insert('log', array(
					'username' => $this->data['user']['fullname'],
					'activity_type' => 'accept ticket',
					'account_type' => 'user',
					'level' => $this->data['user']['job_desk'],
					'status' => 'success',
					'message' => 'Title :'. $this->data['getTicketDetail']['title'],
					'ip_address' => $this->input->ip_address(),
					'user_agent' => $this->input->user_agent(),
					'created' => date('Y-m-d H:i:s')
				));
				
				$this->session->set_flashdata('pesan', 'Ticket has been added successful.');
				redirect('dashboard');
			}
			else
			{
				redirect('404_override');
			}
		}
		
		public function UserTicketResolved($ticket_id)
		{
			$this->data['getTicketProgress'] = $this->user_ticket_m->getDetailProgress($ticket_id, $this->data['user_id']);
			
			if(isset($this->data['getTicketProgress']))
			{
				$this->data['UserResolvedTicket'] = $this->user_ticket_m->UserAddResolvedTicket($this->data['user_id'], $this->data['getTicketProgress']['ticket_id']);
				$this->session->set_flashdata('pesan', 'Ticket has been resolved successful.');
				redirect('dashboard');
			}
			else
			{
				redirect('404_override');
			}
		}

		public function ListTicketResolved()
		{
			$this->data['title'] = "PROBLEM RESOLVED";
			$this->template->build('resolved',$this->data);
		}

		public function LoadTicketResolved()
		{
			$this->data['ticket_resolved'] = $this->user_ticket_m->getTicketResolved($this->data['user_id'], $this->data['user']['job_desk']);
			//var_dump($this->data['user']['job_desk']);
			$this->load->view('TableTicketResolved',$this->data);
		}

	}