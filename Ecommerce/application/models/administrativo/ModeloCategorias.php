<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloCategorias extends CI_Model
{
    function gettodo()
    {
        $this->db->select(' *,
                            (SELECT u_username FROM tbl_usuarios WHERE u_id = usuariomod) AS usuario,
                            DATE(fechamod) AS fecha ');
        $this->db->from('tbl_categorias');
        $this->db->where('estado',1);
        $rest=$this->db->get();
        return $rest->result();
    }

    function getguardar()
    {
        $id             =   $this->input->post('id');
        $nomgru         =   $this->input->post('nomgru');

        $usuario = $this->session->userdata('id_usuario');
        $fecha = date("Y-m-d h:i:s");

        if($id==0)
        {
            $this->db->select(' nomgru ');
            $this->db->from('tbl_categorias');
            $this->db->where('nomgru',$nomgru);
            $rest=$this->db->get();
        
            if($rest->num_rows()==1)
            {
                return 1;
            }
            else if($rest->num_rows()==0)
            {

                $data=array(
                    'codgru'=>'',
                    'nomgru'=>$nomgru,
                    'fechacrea'=>$fecha,
                    'fechamod'=>$fecha,
                    'usuariocrea'=>$usuario,
                    'usuariomod'=>$usuario,
                    'estado'=>1,
                );
            
                $sql_query=$this->db->insert('tbl_categorias',$data);

                $ultimoId = $this->db->insert_id();

                //insertar el codgru
                if($ultimoId < 10)
                {
                    $codgru = '00'.$ultimoId;
                }
                else if($ultimoId >= 10 && $ultimoId < 100)
                {
                    $codgru = '0'.$ultimoId;
                } 
                else if($ultimoId >= 100)
                {
                    $codgru = $ultimoId;
                }

                $data=array(
                    'codgru'=>$codgru,
                );
            
                $sql_query=$this->db->where('id', $ultimoId)->update('tbl_categorias', $data);

                return 0;
            }
        }else{

            $data=array(
                'nomgru'=>$nomgru,
                'fechamod'=>$fecha,
                'usuariomod'=>$usuario,
            );
        
            $sql_query=$this->db->where('id', $id)->update('tbl_categorias', $data);

            return 0;
        }
       
    }

    function geteliminar()
    {
        $id         =   $this->input->post('id');
        $nomgru     =   $this->input->post('nomgru');
        $usuario    =   $this->session->userdata('id_usuario');
        $fecha      =   date("Y-m-d h:i:s");

        
        $data=array(
            'fechamod'=>$fecha,
            'usuariomod'=>$usuario,
            'estado'=>2,
        );
    
        $sql_query=$this->db->where('id', $id)->update('tbl_categorias', $data);
    }
}