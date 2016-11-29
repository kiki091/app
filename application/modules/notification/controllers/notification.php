<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Notification extends User_Controller
    	{
        	public function __construct()
		{
			parent::__construct();
			$this->load->model('notification_m');
			$this->template->set_layout('default');
		}

		public function getTotalNotification()
		{
			$this->data['total_notif'] = $this->notification_m->getTotalNotification($this->data['user']['job_desk']);
			$this->load->view('total_notification', $this->data);
		}

		public function getListNotification()
		{
			$this->data['list_notif'] = $this->notification_m->getListNotification($this->data['user']['job_desk']);
			$this->load->view('list_notification', $this->data);
		}

	}
