<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class User_Main extends User_Controller
    	{
        	public function __construct()
		{
			parent::__construct();
			$this->load->model('user_m');
			$this->template->set_layout('default');
		}
        
        	public function index()
		{
			$this->data['menu'] = "active";
			$this->data['title'] = 'DASHBOARD';
			$this->template->build('main',$this->data);
		}
		
		public function TotalTicketPending()
		{
			$this->data['TotalTicketPending'] = $this->user_m->getTotalTicketPending($this->data['user']['job_desk']);
			$this->load->view('LoadTotalTicketPending',$this->data);
		}
		
		public function TotalTicketProgress()
		{
			$this->data['TotalTicketOnProgress'] = $this->user_m->getTotalTicketOnProgress($this->data['user_id']);
			$this->load->view('LoadTotalTicketOnProgress',$this->data);
		}
		
		public function TotalTicketDone()
		{
			$this->data['TotalTicketFinished'] = $this->user_m->getTotalTicketFinished($this->data['user_id'], $this->data['user']['job_desk']);
			$this->load->view('LoadTotalTicketDone',$this->data);
		}
		
		public function LoadDataTicketProgress()
		{
			$this->data['ticket_progress'] = $this->user_m->getTicketProgress($this->data['user_id'], $this->data['user']['job_desk']);
			$this->load->view('TableTicketProgress',$this->data);
		}
    	}
