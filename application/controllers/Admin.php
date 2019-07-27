<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
    public $data = array();
    public function __construct(){
        parent::__construct();

        ///login cek
        if($this->session->userdata('status') == "loged")
        {
            
        }
        else
        {
            redirect('login');
        }


        $this->load->library('temp_admin');
      }

    function index()
    {
        
        $this->data['title']='Dashboard';
        $this->temp_admin->render_page('admin_v/content/v_dashboard',$this->data);
    }
}


?>