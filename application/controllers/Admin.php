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
        $this->data['title']='Event';
        $this->data['act']='event';
        $this->data['event']=$this->m_data->getAll('event');
        $this->temp_admin->render_page('admin_v/content/event/index',$this->data);
    }

    function addEvent()
    {
        $nama_event = ucwords($this->input->post('nama_event'));
        $cp_event = $this->input->post('cp_event');
        $desc_event = ucfirst($this->input->post('desc_event'));
        
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
            
            $this->data['title']='Event';
            $this->data['act']='addevent';
            
            $this->temp_admin->render_page('admin_v/content/event/add',$this->data);
        }

    }
    function editEvent($id)
    {
        $data = array();
        $id = array('id_event'=>$id);
        $this->data['event']=$this->m_data->getWhere('event',$id);
        $this->load->view('admin_v/content/event/edit',$this->data);
        
    }

    function updateEvent()
    {
        $id_event = array('id_event'=>$this->input->post('id_event'));
        $nama_event = ucwords($this->input->post('nama_event'));
        $cp_event = $this->input->post('cp_event');
        $desc_event = ucfirst($this->input->post('desc_event'));

        
        
        if($nama_event && $cp_event && $desc_event!='')
        {
            $data = array(
                'nama_event' => $nama_event,
                'cp_event' => $cp_event,
                'desc_event' => $desc_event
            );
            
            if($this->m_data->update('event',$data,$id_event)==TRUE)
            {
                echo 'suskes';
            }
            
            
            
        }
        else
        {
            redirect('admin/event');
        }
    }

    function lomba($index="")
    {
        if($index=="")
        {
        $this->data['title']='Lomba';
        $this->data['act']='lomba';
        $this->data['lomba']=$this->m_data->getAll('lomba');
        $this->temp_admin->render_page('admin_v/content/lomba/index',$this->data);
        }

        else if($index=="gubernur")
        {
        $this->data['title']='Lomba Piala Gubernur';
        $this->data['act']='gubernur';
        $this->data['lom_gub']=$this->m_data->getWhere('lomba',array('id_jenislomba'=>1));
        $this->temp_admin->render_page('admin_v/content/lomba/gubernur/index',$this->data);
        }
        else if($index=="bupati")
        {
        $this->data['title']='Lomba Piala Bupati';
        $this->data['act']='bupati';
        $this->data['lom_bup']=$this->m_data->getWhere('lomba',array('id_jenislomba'=>2));
        $this->temp_admin->render_page('admin_v/content/lomba/bupati/index',$this->data);
        }
    }

    public function js()
    {
        $this->load->view('admin_v/javascript/index');
    }
}


?>