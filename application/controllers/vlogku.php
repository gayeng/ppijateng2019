<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vlogku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('url','download'));	
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Lomba Vlog On The Spot ';
         $this->template->render_page('guest_v/lomba/v_vlogku',$this->data);
    }

  
		public function lakukan_download(){				
		force_download('dokumen/piala_bup_lomba vlog_ots.pdf',NULL);
	}	
	
}