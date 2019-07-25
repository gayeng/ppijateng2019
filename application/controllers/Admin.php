<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller
{
    function index()
    {
        $this->template->load('admin_v/template','admin_v/admin/home');
    }
}


?>