<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lomba extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		
    }

    function index()
    {
        $this->template->render_page('guest_v/lomba/index');
    }

    function gubernur()
    {
        $this->template->render_page('guest_v/lomba/gubcontest');
    }

    function bupati()
    {
        $this->template->render_page('guest_v/lomba/bupcontest');
    }

}

?>