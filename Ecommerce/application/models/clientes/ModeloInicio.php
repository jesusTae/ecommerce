<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloInicio extends CI_Model
{
    function gettodo()
    {
        $this->db->select(' * ');
        $this->db->from('tbl_articulos a');
        $this->db->where('a.estado',1);
        $rest=$this->db->get();
        return $rest->result();
    }
}