<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Exceptions extends CI_Exceptions {

	public function __construct()
    {
        parent::__construct();
    }
    
    function show_404($page = '', $log_error = TRUE)
    {
        $ci =& get_instance();
		
        // By default we log this, but allow a dev to skip it
        if ($log_error)
        {
            log_message('error', '404 Page Not Found --> '.$page);
        }
		
		$ci->load->library('Template');
		
		$data['me'] = false;
		$data['logged_in'] = $this->is_logged_in();
		
		$data['config'] = array(
			'meta_keyword' => '',
			'author' => 'Gedoor Media',
			'language' => 'Indonesia',
			'copyright' => $ci->config->item('site_copyright'),
		);
		
		$data['menu'] = $ci->global_m->get_menu($parent_id = 0);
		$data['total_row_static_menu'] = $ci->global_m->total_row_static_menu();
		$data['static_menu'] = $ci->global_m->static_menu();
		$data['flash'] = $ci->global_m->get_flash();
		$data['magazine'] = $ci->global_m->magazine();
		$data['footer_category'] = $ci->global_m->footer_category();
		$data['post'] = $ci->global_m->post_on_404();
		if ($data['footer_category'])
		{
			foreach ($data['footer_category'] as $key => $val)
			{
				$data['footer_category'][$key]['footer_child'] = $ci->global_m->footer_category_child($val['id']);
			}
		}
		
		if ($this->is_logged_in())
		{
			$result = $ci->global_m->get_userdata($ci->session->userdata('user_id'));
			$data['me'] = $result;
		}
		
		$ci->template->set('title', '404');
		$ci->template->set_partial('header_board', '/partials/header');
		$ci->template->set_layout('post');
		$ci->template->build('error_404', $data);
		
		//$ci->load->view('error_404', $data);
        echo $ci->output->get_output();
		exit;
    }
	
	function is_logged_in()
	{
		$ci =& get_instance();
		return $ci->session->userdata('user_logged_in');
	}
}

/* End of file MY_Exceptions.php */
/* Location: ./application/core/MY_Exceptions.php */