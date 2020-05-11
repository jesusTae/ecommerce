<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorArticulos extends CI_Controller
{
    function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE)
        {
            redirect('login');
        }
		$this->load->model('administrativo/ModeloArticulos');
	
    }
    
	public function index()
	{
		$this->load->view('administrativo/componentes2/header');
		$this->load->view('administrativo/componentes2/menu');
		$this->load->view('administrativo/articulos/vista_articulos');
		$this->load->view('administrativo/componentes2/footer');
	}

	public function todo()
	{
		$data=$this->ModeloArticulos->gettodo();
		echo json_encode($data);
	}

	public function guardar()
	{
		$data=$this->ModeloArticulos->getguardar();
		echo json_encode($data);
	}

	public function eliminar()
	{
		$data=$this->ModeloArticulos->geteliminar();
		echo json_encode($data);
	}


}
?>