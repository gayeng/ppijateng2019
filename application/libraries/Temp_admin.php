<?php
class Temp_admin{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
  function render_page($content, $data = NULL){
    /*
     * $data['headernya'] , $data['contentnya'] , $data['footernya']
     * variabel diatas ^ nantinya akan dikirim ke file views/template/index.php
     * */
    $data['header'] = $this->_ci->load->view('admin_v/_partials/header', $data, TRUE);
    $data['sidebar'] = $this->_ci->load->view('admin_v/_partials/sidebar', $data, TRUE);
    $data['content'] = $this->_ci->load->view($content, $data, TRUE);
    $data['footer'] = $this->_ci->load->view('admin_v/_partials/footer', $data, TRUE);
    
    $this->_ci->load->view('admin_v/index', $data);
    }
}