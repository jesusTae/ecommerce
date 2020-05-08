<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloCategorias extends CI_Model
{
    function gettodo()
    {
        $this->db->select(' *,
                            (SELECT u_username FROM tbl_usuarios WHERE u_id = c_usuariomod) AS usuario,
                            DATE(c_fechamod) AS fecha ');
        $this->db->from('tbl_categorias');
        $this->db->where('c_estado',1);
        $rest=$this->db->get();
        return $rest->result();
    }

    function getguardar()
    {
        $id             =   $this->input->post('id');
        $nombre         =   $this->input->post('nombre');

        $usuario = $this->session->userdata('id_usuario');
        $fecha = date("Y-m-d h:i:s");

        if($id==0)
        {
            $this->db->select(' c_nombre ');
            $this->db->from('tbl_categorias');
            $this->db->where('c_nombre',$nombre);
            $rest=$this->db->get();
        
            if($rest->num_rows()==1)
            {
                return $rest->num_rows();
            }
            else if($rest->num_rows()==0)
            {

                $data=array(
                    'c_nombre'=>$nombre,
                    'c_fechacrea'=>$fecha,
                    'c_fechamod'=>$fecha,
                    'c_usuariocrea'=>$usuario,
                    'c_usuariomod'=>$usuario,
                    'c_estado'=>1,
                );
            
                $sql_query=$this->db->insert('tbl_categorias',$data);

                return $rest->num_rows();
            }
        }else{

            $data=array(
                'c_nombre'=>$nombre,
                'c_fechamod'=>$fecha,
                'c_usuariomod'=>$usuario,
            );
        
            $sql_query=$this->db->where('c_id', $id)->update('tbl_categorias', $data);

            return 0;
        }
       
    }

    function geteliminar()
    {
        $id         =   $this->input->post('id');
        $nombre     =   $this->input->post('nombre');
        $usuario    =   $this->session->userdata('id_usuario');
        $fecha      =   date("Y-m-d h:i:s");

        
        $data=array(
            'c_fechamod'=>$fecha,
            'c_usuariomod'=>$usuario,
            'c_estado'=>2,
        );
    
        $sql_query=$this->db->where('c_id', $id)->update('tbl_categorias', $data);
    }
}