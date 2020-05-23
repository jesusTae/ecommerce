<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloArticulos extends CI_Model
{
    function gettodo()
    {
        $this->db->select(' a.*, 
                            DATE(a.fechacrea) AS fecha,
                            c.nomgru
                             ');
        $this->db->from('tbl_articulos a');
        $this->db->join('tbl_categorias c', 'c.id  = a.categoria');
        $this->db->where('a.estado',1);
        $rest=$this->db->get();
        return $rest->result();
    }

    function getcategoria()
    {
        $searchTerm = $this->input->post('searchTerm');

        // Fetch users
        $this->db->select('id,nomgru');
        $this->db->where("nomgru like '%".$searchTerm."%' ");
        $this->db->where("estado",1);
        $fetched_records = $this->db->get('tbl_categorias');
        $users = $fetched_records->result_array();
 
        // Initialize Array with fetched data
        $data = array();
        foreach($users as $user){
            $data[] = array("id"=>$user['id'], "text"=>$user['nomgru']);
        }
        return $data;
    }

    function getguardar()
    {
        $id             =   $this->input->post('id');
        $urlimg         =   $this->input->post('urlimg');
        $categoria      =   $this->input->post('categoria');
        $codart         =   $this->input->post('codart');
        $nomart         =   $this->input->post('nomart');
        $valart         =   $this->input->post('valart');
        $qtyart         =   $this->input->post('qtyart');
        $descripción    =   $this->input->post('descripción');

        $usuario = $this->session->userdata('id_usuario');
        $fecha = date("Y-m-d h:i:s");

        if($id==0)
        {
            $this->db->select(' codart ');
            $this->db->from('tbl_articulos');
            $this->db->where('codart',$codart);
            $rest=$this->db->get();
        
            if($rest->num_rows()==1)
            {
                return 1;
            }
            else if($rest->num_rows()==0)
            {
                $data=array(
                    'imageurl'=>'',
                    'imagenombre'=>'',
                    'categoria'=>$categoria,
                    'codart'=>$codart,
                    'nomart'=>$nomart,
                    'valart'=>$valart,
                    'qtyart'=>$qtyart,
                    'descripción'=>$descripción,
                    'fechacrea'=>$fecha,
                    'fechamod'=>$fecha,
                    'usuariocrea'=>$usuario,
                    'usuariomod'=>$usuario,
                    'estado'=>1,
                );
            
                $sql_query=$this->db->insert('tbl_articulos',$data);

                $ultimoId = $this->db->insert_id();

                if(isset($_FILES["file"]['name'])){

                    $ruta = "asset/administrativo/imgarticulos/"; // la ruta
                    $nombreimagen = $_FILES["file"]['name'];

                    $info = new SplFileInfo($nombreimagen);
                    $valores = $info->getExtension();

                    $mi_archivo ='file';
                    $config['upload_path'] = $ruta;
                    $config['file_name'] =$ultimoId;
                    $config['allowed_types'] = "jpg|png|jpeg";
                    $config['max_size'] = 0;
                    $config['max_width'] = 0;
                    $config['max_height'] = 0;

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload($mi_archivo)) {}

                    $imagen = $ruta.$ultimoId.".".$valores;
                    $imagennombre = $ultimoId.".".$valores;

                    $data1=array(
                        'imageurl'=>$imagen,
                        'imagenombre'=>$imagennombre,
                    );
                
                    $sql_query=$this->db->where('id',$ultimoId)->update('tbl_articulos', $data1);
                }

                return 0;
            }
        }else{

            $data=array(
                'imageurl'=>'',
                'imagenombre'=>'',
                'categoria'=>$categoria,
                'nomart'=>$nomart,
                'valart'=>$valart,
                'qtyart'=>$qtyart,
                'descripción'=>$descripción,
                'fechamod'=>$fecha,
                'usuariomod'=>$usuario,
            );
        
            $sql_query=$this->db->where('id', $id)->update('tbl_articulos', $data);

            if(isset($_FILES["file"]['name'])){

                $ruta = "asset/administrativo/imgarticulos/"; // la ruta
                $nombreimagen = $_FILES["file"]['name'];
                $rutavieja = $urlimg;
            
                $info = new SplFileInfo($nombreimagen);
                $valores = $info->getExtension();

                $mi_archivo ='file';
                $config['upload_path'] = $ruta;
                $config['file_name'] =$id;
                $config['allowed_types'] = "jpg|png|jpeg";
                $config['max_size'] = 0;
                $config['max_width'] = 0;
                $config['max_height'] = 0;

                $this->load->library('upload', $config);

                $exists = is_file( $rutavieja);//verifica si existe la imagen manda un 1 si existe

                if($exists == 1){

                    unlink($rutavieja);//borra la imagen si existe
        
                }
              
                if ($this->upload->do_upload($mi_archivo)) {}

                $imagen = $ruta.$id.".".$valores;
                $imagennombre = $id.".".$valores;

                $data1=array(
                    'imageurl'=>$imagen,
                    'imagenombre'=>$imagennombre,
                );
            
                $sql_query=$this->db->where('id',$id)->update('tbl_articulos', $data1);
            }

            return 0;
        }
       
    }

    function geteliminar()
    {
        $id         =   $this->input->post('id');
        $nomart     =   $this->input->post('nomart');
        $usuario    =   $this->session->userdata('id_usuario');
        $fecha      =   date("Y-m-d h:i:s");

        
        $data=array(
            'fechamod'=>$fecha,
            'usuariomod'=>$usuario,
            'estado'=>2,
        );
    
        $sql_query=$this->db->where('id', $id)->update('tbl_articulos', $data);
    }
}