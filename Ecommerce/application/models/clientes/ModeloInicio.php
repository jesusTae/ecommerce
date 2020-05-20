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

    function getslaider()
    {
        $this->db->select(' p.*,
                            IF(p.p_tbl=2,(SELECT nomart FROM tbl_articulos WHERE id = p.p_elegido),(SELECT nomgru FROM tbl_categorias WHERE id = p.p_elegido)) AS descripcion,');
        $this->db->from('tbl_promociones p');
        $this->db->where('p.p_estado',1);
        $rest=$this->db->get();
        return $rest->result();
    }
}