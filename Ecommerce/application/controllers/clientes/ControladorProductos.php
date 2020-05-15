<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorProductos extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->model('administrativo/ModeloArticulos');
	
    }

	public function index()
	{
		$this->load->view('clientes/productos/vista_Productos');
		$this->load->view('clientes/componentes/footer');
	}

	public function todo()
	{
		$data=$this->ModeloArticulos->gettodo();
		echo json_encode($data);
	}

	public function descripcion()
	{
		$this->load->view('clientes/productos/vista_descripcion');
		$this->load->view('clientes/componentes/footer');
	}
}
