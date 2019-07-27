<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->session->userdata('status') == "loged")
        {
            redirect('admin');
        }
        else
        {

        }
    }

    function index()
    {
        $this->load->view('admin_v/v_login');
    }

    function act()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => md5($password)
        );

        $cek = $this->m_login->cek_login('user',$where);
        if($cek>0)
        {
            $data_session = array(
                'username' =>$username,
                'status' => "loged"
            );

            $this->session->set_userdata($data_session);
            redirect('admin');
        }

        else
        {
            redirect('login');
        }
    }
}

?>
