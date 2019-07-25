<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
	  
	  $this->template->load('guest_v/layoutfront', 'guest_v/beranda_v'); 
	}
	}

?>