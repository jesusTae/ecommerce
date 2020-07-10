<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloVenta extends CI_Model
{
    function getguardar()
    {
        $formapago  =   $this->input->post('formapago');
        $direccion  =   $this->input->post('direccion');
        $telefono   =   $this->input->post('telefono');

        $usuario    =   $this->session->userdata('id_usuario');
        $nit        =   $this->session->userdata('nit_tusuario');
        $fecha      =   date("Y-m-d h:i:s");
        $vtotal     = 0;

        if($formapago == 1){
            $estado = 1;
        }
        else{

            $estado = 2;
        }

        /**GUARDAR FACTURA */
        $data2=array(
            'codcto'=>'001',
            'tipfac'=>'TV',
            'numfac'=>'',
            'fecfac'=>$fecha,
            'mediopago'=>$formapago,
            'valfac'=>$vtotal,
            'descfac'=>0,
            'netfac'=>$vtotal-0,
            'Detalle'=>'',
            'nitcli'=>$nit,
            'estado'=>$estado,
        );
    
        $sql_query=$this->db->insert('factura',$data2);
        $ultimoId = $this->db->insert_id();


        /**GUARDAR ITEM DE FACTURAS */
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
                'tipofactura'=>'TV',
                'numfactura'=>$ultimoId,
                'codcto'=>'001',
                'codart'=>$codart,
                'valart'=>$valart,
                'qtyart'=>$qtyart,
                'totart'=>$valart * $qtyart,
                'descart'=>0,
                'estado'=>$estado,
                'fecha'=>$fecha,
            );
        
            $sql_query=$this->db->insert('detallefactura',$data1);

        }

          /**AGREGAR NUMFACT AUTOINCREMENTABLE */
          $data3=array(
            'numfac'=>$ultimoId,
            'valfac'=>$vtotal,
        );
    
        $sql_query=$this->db->where('id',$ultimoId)->update('factura', $data3);

        /** ELIMINAR CARRITO DE COMPRA */
        $this->db->where('c_cliente', $usuario);
        $this->db->delete('tbl_carrito');

        
         /**api de factura */
        
         $curl = curl_init();
         $auth_data =  array(
             "idemp"   => '001',
             "codcto"  => '001',
             "tipfac"  => 'TV',
             "numfac"  => $ultimoId,
             "valfac"  => $vtotal,
             "netfac"  => $vtotal,
             "nitcli"  => $nit,
         );
         curl_setopt($curl, CURLOPT_POST, 1);
         curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
         curl_setopt($curl, CURLOPT_URL, 'http://3.18.34.105:8080/apiGlobal/public/api/saveFactura');
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
         $result = curl_exec($curl);
         if(!$result){die("Connection Failure");}
         curl_close($curl);
       
        /**api de detalle factura */

        $this->db->select(' * ');
        $this->db->from('detallefactura');
        $this->db->where('tipofactura','TV');
        $this->db->where('numfactura',$ultimoId);
        $rest2=$this->db->get();
       

        foreach ( $rest2->result() as $row2) {
            
            $dcodcto = $row2->codcto;
            $dcodart = $row2->codart;
            $dnumfac = $row2->numfactura;
            $dtipfac = $row2->tipofactura;
            $dvalfac = $row2->valart;
            $dqtyart = $row2->qtyart;

            $curl = curl_init();
            $auth_data =  array(
                "idemp"  =>  '001',
                "codcto" =>  $dcodcto,
                "codart" =>  $dcodart,
                "numfac" =>  $dnumfac,
                "tipfac" =>  $dtipfac,
                "valfac" =>  $dvalfac,
                "qtyart" =>  $dqtyart,
            );
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
            curl_setopt($curl, CURLOPT_URL, 'http://3.18.34.105:8080/apiGlobal/public/api/saveFacturadet');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            $result = curl_exec($curl);
            if(!$result){die("Connection Failure");}
            curl_close($curl);
        }
    }
   
}