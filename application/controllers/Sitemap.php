<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper(array('url','download'));	
		
    }

    function index()
    {
        $data = array();
		$this->data['title']='Lomba Pertanian';
        $this->template->render_page('guest_v/lomba/v_lombapertanian',$this->data);
    }
	
	function Kemitraan()
    {
        $data = array();
		$this->data['title']='Kemitraan Usaha';
        $this->template->render_page('guest_v/lomba/v_kemitraan',$this->data);
    }
	
	function Kuliner()
    {
        $data = array();
		$this->data['title']='Informasi Kuliner';
        $this->template->render_page('guest_v/lomba/v_kuliner',$this->data);
    }
	
	function Posyantek()
    {
        $data = array();
		$this->data['title']='Posyantek Teknologi Tepat Guna';
        $this->template->render_page('guest_v/lomba/v_posyantek',$this->data);
    }
	
	function Pemuda()
    {
        $data = array();
		$this->data['title']='Seminar Pemuda';
        $this->template->render_page('guest_v/lomba/v_pit',$this->data);
    }
	
	
}
?>