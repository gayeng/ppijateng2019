<?php

class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        if($this->session->userdata('status') != "loged")
        {
            
        }
        else if($this->session->userdata('status')=="loged")
        {
            redirect(base_url("admin"));
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

        if($username && $password != null)
        {
                    $where = array(
                    'username' => $username,
                    'password' => md5($password)
                );
                $cek = $this->m_login->cek_login("user",$where)->num_rows();
                if($cek>0)
                {
                    $data_session = array(
                        'username' => $username,
                        'status' => "loged"
                    );

                    $this->session->set_userdata($data_session);
                    redirect(base_url("admin"));

                }
                else 
                {
                    $this->session->set_flashdata('pesanError','Kombinasi Username dan Password salah!');
                    redirect('login');
                }
        }
        else
        {
            $this->session->set_flashdata('pesanError','Kombinasi Username dan Password salah!');
            redirect('login');
        }
    }
}

?>
