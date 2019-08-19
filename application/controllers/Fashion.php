<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fashion extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));				
	}

	public function index(){		
		$this->load->view('guest_v/lomba/v_download_fashion');
		
	}

	public function lakukan_download(){				
		force_download('dokumen/lomba_fashion.docx',NULL);
	}	

}