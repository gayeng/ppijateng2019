<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		
	}

	public function index()
	{
	  
	  $this->template->render_page('guest_v/konten'); 
	  

	}

	}

?>