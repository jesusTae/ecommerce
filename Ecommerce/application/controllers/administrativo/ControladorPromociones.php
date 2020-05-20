<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorPromociones extends CI_Controller
{
    function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE)
        {
            redirect('login');
        }
		$this->load->model('administrativo/ModeloPromociones');
	
    }
    
	public function index()
	{
		$this->load->view('administrativo/componentes2/header');
		$this->load->view('administrativo/componentes2/menu');
		$this->load->view('administrativo/promociones/vista_promociones');
		$this->load->view('administrativo/componentes2/footer');
	}

	public function todo()
	{
		$data=$this->ModeloPromociones->gettodo();
		echo json_encode($data);
	}

	public function tbl()
	{
		$data=$this->ModeloPromociones->gettbl();
		echo json_encode($data);
	}

	public function elegido()
	{
		$data=$this->ModeloPromociones->getelegido();
		echo json_encode($data);
	}

	public function guardar()
	{
		$data=$this->ModeloPromociones->getguardar();
		echo json_encode($data);
	}

	public function eliminar()
	{
		$data=$this->ModeloPromociones->geteliminar();
		echo json_encode($data);
	}


}
?>