<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		
	}

	public function index()
	{
		$data = array();
		$this->data['title']='Beranda';
		$this->template->render_page('guest_v/beranda/konten',$this->data); 
	  

	}

	

	}

?>