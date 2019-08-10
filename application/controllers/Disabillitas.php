<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disabillitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('url','download'));	
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Lomba';
         $this->template->render_page('guest_v/lomba/v_disabillitas',$this->data);
    }

  
		public function lakukan_download(){				
		force_download('dokumen/PERSYARATAN_LOMBA_JATENG_MENCARI_BAKAT.pdf',NULL);
	}	
	
}