<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->library('temp_admin');
      }

    function index()
    {
        $data = array();
        $this->data['title']='Dashboard';
        $this->temp_admin->render_page('admin_v/content/v_dashboard',$this->data);
    }
}


?>