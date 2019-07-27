<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
    function index()
    {
        $this->load->view('admin_v/partials/header');
        $this->load->view('admin_v/partials/sidebar');
        $this->load->view('admin_v/content/v_dashboard');
        $this->load->view('admin_v/partials/footer');
    }
}


?>