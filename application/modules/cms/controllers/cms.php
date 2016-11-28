<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends Cms_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//$this->load->model('cms_m');
		$this->load->helper('MY_date_helper');
	}
	
	public function index()
	{
		$this->data['menu'] = "active";
		$this->data['title'] = "Content Management System | Support Center";
		$this->template->build('main',$this->data);
	}

}

/* End of file cms.php */
/* Location: ./application/modules/cms/controllers/cms.php */