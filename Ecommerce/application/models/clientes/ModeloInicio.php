<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloInicio extends CI_Model
{
    function gettodo()
    {
        $minimo             =   $this->input->post('minimo');
        $maximo             =   $this->input->post('maximo');
        $categoria          =   $this->input->post('categoria');
        $busquedaGeneral    =   $this->input->post('busquedaGeneral');
        $categoria2         = '';
        $minimo2            =  '';
        $maximo2            =  '';
        $busquedaGeneral2   =  '';

        if($categoria != ""){
            $categoria2 = " AND categoria IN(".$categoria.") ";
        }

        if($minimo != ""){
            $minimo2 = " AND valart >= ".$minimo;
        }

        if($maximo != ""){
            $maximo2 = " AND valart <= ".$maximo;
        }

        if($busquedaGeneral != ""){
            $busquedaGeneral2 = " AND nomart LIKE  '%".$busquedaGeneral."%' ";
        }
       
        $rest = $this->db->query("SELECT * FROM tbl_articulos WHERE estado = 1 $categoria2 $minimo2 $maximo2  $busquedaGeneral2");
        return $rest->result();
       
    }
}