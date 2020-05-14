<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorProductos extends CI_Controller {

	public function index()
	{
		$this->load->view('clientes/productos/vista_Productos');
		$this->load->view('clientes/componentes/footer');
	}
}
