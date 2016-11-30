<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('main_m');
		$this->load->helper('MY_date_helper');
		$this->template->set_layout('default');

		
	}
	
	public function index()
	{
		$this->data['code'] = date("mdYsiH");
        $this->data['getCode'] = str_shuffle($this->data['code']);
        $this->data['office_name'] = $this->global_m->getOfficeName();
        $this->data['branch_office'] = $this->global_m->getBranchOffice();
        $this->data['problem_category'] = $this->global_m->getProblemCategory();
        $this->data['problem_status'] = $this->global_m->getProblemStatus();

		$this->data['title'] = "DASHBOARD";
		$this->template->build('main',$this->data);
	}

	public function load_table_pending()
	{
		$limit = 3; //item per page
        $page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
        $start = ($page * $limit) - $limit;

		$this->data['ticket_pending'] = $this->main_m->getTicketPending($start, $limit);

		$this->load->view('load_table_ticket_pending', $this->data);
	}

	public function load_table_onProgress()
	{
		$this->data['ticket_onProgress'] = $this->main_m->getTicketonProgress();

		$this->load->view('load_table_ticket_onProgress', $this->data);
	}
	
	public function load_table_resolved()
	{
		$this->data['ticket_resolved'] = $this->main_m->getTicketonResolved();

		$this->load->view('load_table_ticket_resolved', $this->data);
	}

	public function TotalTicketPending()
	{
		$this->data['TotalTicketPending'] = $this->main_m->getTotalTicketPending();
		$this->load->view('LoadTotalTicketPending',$this->data);
	}
		
	public function TotalTicketProgress()
	{
		$this->data['TotalTicketOnProgress'] = $this->main_m->getTotalTicketOnProgress();
		$this->load->view('LoadTotalTicketOnProgress',$this->data);
	}
		
	public function TotalTicketDone()
	{
		$this->data['TotalTicketFinished'] = $this->main_m->getTotalTicketFinished();
		$this->load->view('LoadTotalTicketDone',$this->data);
	}
	
}

/* End of file home.php */
/* Location: ./application/modules/home/controllers/home.php */