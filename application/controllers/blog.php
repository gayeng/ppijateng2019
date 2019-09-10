<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('url','download'));	
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Lomba Blog Peserta';
         $this->template->render_page('guest_v/lomba/v_blog',$this->data);
    }

  
		public function lakukan_download(){				
		force_download('dokumen/piala_bup_lomba_blog.pdf',NULL);
	}	
	
}