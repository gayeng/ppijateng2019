<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
 protected $_ci;
  function __construct(){
  $this->_ci = &get_instance();
  }
  
  function render_page($content, $data =NULL ){
	$data['header'] = $this->_ci->load->view('guest_v/includes/header', $data, TRUE);
	$data['content'] = $this->_ci->load->view($content, $data, TRUE);
	$data['footer'] = $this->_ci->load->view('guest_v/includes/footer', $data, TRUE);
	
	$this->_ci->load->view('guest_v/index', $data);
	}
	}

?>