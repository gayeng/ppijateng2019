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

    function getAll($table)
    {
        return $this->db->get($table)->result();
    }

    function getWhere($table,$where)
    {
        return $this->db->get_where($table,$where)->result();
    }

    function update($table,$data,$id)
    {
        
        if($this->db->update($table, $data, $id))
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