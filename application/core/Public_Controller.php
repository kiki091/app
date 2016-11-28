<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('global_m');

		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('sidebar', 'partials/sidebar');
		$this->template->set_partial('footer', 'partials/footer');
		$this->template->set_theme('g3');
		
		$this->template->set_layout('default');
		
	}
	
}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */