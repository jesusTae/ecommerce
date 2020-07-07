<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloCarrito extends CI_Model
{
    function getguardar()
    {
        $id         =   $this->input->post('id');
        $und        =   $this->input->post('und');
        $precio     =   $this->input->post('precio');

        $total      =   $precio * $und;

        $usuario    =   $this->session->userdata('id_usuario');
        $fecha      =   date("Y-m-d h:i:s");

        $data=array(
            'c_cliente'=>$usuario,
            'c_producto'=>$id,
            'c_und'=>$und,
            'c_undvalor'=>$precio,
            'c_totalvalor'=>$total,
            'c_fecha'=>$fecha,
        );
    
        $sql_query=$this->db->insert('tbl_carrito',$data);
    }

    function gettotal()
    {
        $usuario    =   $this->session->userdata('id_usuario');

        $this->db->select('SUM(c_und) AS total,SUM(c_totalvalor) AS totalsum');
        $this->db->from('tbl_carrito');
        $this->db->where('c_cliente',$usuario);
        $rest=$this->db->get();
        return $rest->result();
    }

    function gettodo()
    {
        $usuario    =   $this->session->userdata('id_usuario');

        $this->db->select('c.*,
                            a.imageurl,
                            a.valart,
                            a.nomart
                            ');
        $this->db->from('tbl_carrito c');
        $this->db->join('tbl_articulos a', 'a.codart  = c.c_producto');
        $this->db->where('c.c_cliente',$usuario);
        $this->db->order_by('c.c_fecha', 'DESC');
        $rest=$this->db->get();
        return $rest->result();
    }

    function geteliminar()
    {
        $fecha     =   $this->input->post('fecha');
        $articulo     =   $this->input->post('articulo');
        $total     =   $this->input->post('total');
        $usuario    =   $this->session->userdata('id_usuario');

        $this->db->where('c_fecha', $fecha)->where('c_producto', $articulo)->where('c_totalvalor', $total)->where('c_cliente', $usuario);
        $this->db->delete('tbl_carrito');
    }

   
}