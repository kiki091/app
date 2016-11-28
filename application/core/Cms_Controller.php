<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->model('global_m');
		$this->load->helper('slug_helper');

		$this->template->set_partial('header', 'partials/cms/header');
		$this->template->set_partial('sidebar', 'partials/cms/sidebar');
		$this->template->set_partial('footer', 'partials/footer');
		$this->template->set_layout('cms');
		$this->template->set_theme('g3');
        
        $this->data['me_id'] = $this->session->userdata('ME_ID');
        $this->data['me'] = $this->global_m->getAccount($this->data['me_id']);

        if($this->session->userdata('SESS_ADMIN') != TRUE)
        { 
        	redirect('login'); 
        }
        
	}
	
}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */