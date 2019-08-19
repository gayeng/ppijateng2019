<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Event';
        $this->template->render_page('guest_v/event/index',$this->data);
    }

}


?>