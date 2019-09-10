<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lomba extends CI_Controller {

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
        $this->template->render_page('guest_v/lomba/index',$this->data);
    }

    function gubernur()
    {
        $data = array();
		$this->data['title']='Piala Gubernur';
        $this->template->render_page('guest_v/lomba/gubcontest',$this->data);
    }
	
	public function lakukan_download_game(){				
		force_download('dokumen/JATENG_ROBOTIC_2019.pdf',NULL);
	}	
	
	public function lakukan_download_game_cdr(){				
		force_download('dokumen/TrackJRCWonosobo2019.cdr',NULL);
	}	

    function bupati()
    {
        $data = array();
		$this->data['title']='Piala Bupati';
        $this->template->render_page('guest_v/lomba/bupcontest',$this->data);
    }
	
	public function lakukan_download_bup(){				
		force_download('dokumen/S&KTHEAMAZINGRACEPIJATENG2019WONOSOBO.pdf',NULL);
	}	

}

?>