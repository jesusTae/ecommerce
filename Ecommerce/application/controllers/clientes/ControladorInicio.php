<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorInicio extends CI_Controller
{
    function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE)
        {
            redirect('login');
        }
		$this->load->model('clientes/ModeloInicio');
	
    }
    
	public function todo()
	{
		$data=$this->ModeloInicio->gettodo();
		echo json_encode($data);
	}

}