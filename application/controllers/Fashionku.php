<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fashionku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('url','download'));	
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Lomba Fashion Daur Ulang';
         $this->template->render_page('guest_v/lomba/v_fashion_daur_ulang',$this->data);
    }

  
		public function lakukan_download(){				
		force_download('dokumen/PERSYARATAN_LOMBA_FASHION_SHOW_BARANG_BEKAS.pdf',NULL);
	}	
	
}