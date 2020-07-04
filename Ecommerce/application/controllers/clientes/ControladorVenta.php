<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorVenta extends CI_Controller
{
    function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE)
        {
            redirect('login');
        }
		$this->load->model('clientes/ModeloVenta');
	
    }
    
	public function guardar()
	{
		$data=$this->ModeloVenta->getguardar();
		echo json_encode($data);
	}

}