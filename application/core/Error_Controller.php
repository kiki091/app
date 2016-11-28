<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('footer', 'partials/footer');
		$this->template->set_theme('g3');
		
	}
	
}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */