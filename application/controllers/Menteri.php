<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menteri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
	  
 $this->template->load('guest_v/aksesmenteri', 'guest_v/menteri_v'); 
 
	}
	
	}

?>