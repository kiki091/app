<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('global_m');
		$this->load->helper('slug_helper');

		$this->template->set_partial('header', 'partials/header');
		$this->template->set_partial('sidebar', 'partials/sidebar');
		$this->template->set_partial('footer', 'partials/footer');
		$this->template->set_theme('g3');
        
        $this->data['user_id'] = $this->session->userdata('USER_ID');
        $this->data['user'] = $this->global_m->getAccount($this->data['user_id']);

        if($this->session->userdata('SESS_USER') != TRUE)
        { 
        	redirect('login'); 
        }
        
	}
	
}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */