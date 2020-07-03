<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloPedidos extends CI_Model
{
    function gettodo()
    {
        $this->db->select(' * ');
        $this->db->from('factura');
        //$this->db->where('estado',1);
        $rest=$this->db->get();
        return $rest->result();
    }
}