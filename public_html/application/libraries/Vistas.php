<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vistas {

	protected $CI;

	public function __construct()
 	{
 		// Assign the CodeIgniter super-object
        @$this->CI =& get_instance();
 	}
 	
	public function _head()
	{
		@$this->CI->load->view('global_views/head');
	}

	public function _navbar()
	{
		@$this->CI->load->view('global_views/navbar');
		//$this->load->view('global_views/navbar');
	}

	public function _header()
	{
		@$this->load->view('global_views/header');
	}

	public function _footer()
	{
		@$this->load->view('global_views/footer');
	}
}
