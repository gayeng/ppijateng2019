<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model
{
    function addData($table,$data)
    {
        if($this->db->insert($table, $data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>