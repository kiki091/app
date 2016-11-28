<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Erorr extends Error_Controller
    {
        public function __construct()
		{
			parent::__construct();
            $this->template->set_layout('erorr');
		}
        
        public function erorr_404()
        {
            $this->data['title'] = "404 Page Not Fount";
            $this->template->build('404',$this->data);
        }
        
    }