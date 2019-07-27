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
        $this->load->model('m_data');
      }

    function index()
    {
        
        $this->data['title']='Dashboard';
        $this->data['act']='dashboard';
        $this->temp_admin->render_page('admin_v/content/dashboard/index',$this->data);
    }

    function event()
    {
        $this->data['title']='Semua Event';
        $this->data['act']='event';
        $this->temp_admin->render_page('admin_v/content/event/index',$this->data);
    }

    function addEvent()
    {
        $nama_event = ucfirst($this->input->post('nama_event'));
        $cp_event = $this->input->post('cp_event');
        $desc_event = $this->input->post('desc_event');
        
        if($nama_event && $cp_event && $desc_event!='')
        {
            $data = array(
                'nama_event' => $nama_event,
                'cp_event' => $cp_event,
                'desc_event' => $desc_event
            );
            if($this->m_data->addData('event',$data)==true)
            {
                $this->session->set_flashdata('msg_success','Berhasil menambahkan '.$nama_event);
                redirect('admin/addEvent');
            }

            else
            {
                $this->session->set_flashdata('msg_error','Maaf!, terjadi kesalahan');
                redirect('admin/addEvent');
            }
        }

        else
        {
            
            $this->data['title']='Tambah Event';
            $this->data['act']='addevent';
            $this->temp_admin->render_page('admin_v/content/event/add',$this->data);
        }

    }
}


?>