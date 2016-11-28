<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public $data;
	protected $themes_table = 'themes';
	
	function __construct()
	{
		parent::__construct();
	}
	
	function set_theme()
	{
		return $this->db->get_where($this->themes_table, array($this->themes_table.'.is_used' => 1))->row_array();
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */