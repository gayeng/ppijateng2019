<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sampah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('url','download'));	
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Lomba Daur Ulang Sampah';
         $this->template->render_page('guest_v/lomba/v_sampah',$this->data);
    }

  
		public function lakukan_download(){				
		force_download('dokumen/piala_bup_lomba_daurulang.pdf',NULL);
	}	
	
}