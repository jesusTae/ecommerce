<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloVenta extends CI_Model
{
    function getguardar()
    {
        $formapago    =   $this->input->post('formapago');
        $direccion    =   $this->input->post('direccion');
        $telefono     =   $this->input->post('telefono');

        $usuario    =   $this->session->userdata('id_usuario');
        $nit    =   $this->session->userdata('nit_tusuario');
        $fecha      =   date("Y-m-d h:i:s");
        $vtotal = 0;

        $this->db->select(' * ');
        $this->db->from('tbl_carrito');
        $this->db->where('c_cliente',$usuario);
        $rest=$this->db->get();

        foreach ($rest->result() as $row) {

            $vtotal = $vtotal + $row->c_totalvalor;

            $codart = $row->c_producto;
            $valart = $row->c_undvalor;
            $qtyart = $row->c_und;

            $data1=array(
                'codcto'=>0,
                'codart'=>$codart,
                'valart'=>$valart,
                'qtyart'=>$qtyart,
                'totart'=>$valart * $qtyart,
                'descart'=>0,
                'estado'=>1,
            );
        
            $sql_query=$this->db->insert('detallefactura',$data1);

        }


        /**GUARDAR FACTURA */
        $data2=array(
            'codcto'=>'001',
            'tipfac'=>'TV',
            'numfac'=>'',
            'fecfac'=>$fecha,
            'valfac'=>$vtotal,
            'descfac'=>0,
            'netfac'=>$vtotal-0,
            'Detalle'=>'',
            'nitcli'=>$nit,
            'estado'=>1,
        );
    
        $sql_query=$this->db->insert('factura',$data2);
        $ultimoId = $this->db->insert_id();

        /**AGREGAR NUMFACT AUTOINCREMENTABLE */
        $data3=array(
            'numfac'=>$ultimoId,
        );
    
        $sql_query=$this->db->where('id',$ultimoId)->update('factura', $data3);

        /** ELIMINAR CARRITO DE COMPRA */
        $this->db->where('c_cliente', $usuario);
        $this->db->delete('tbl_carrito');
    }
   
}