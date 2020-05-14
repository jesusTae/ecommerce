<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorCarrito extends CI_Controller {

	public function index()
	{
		$this->load->view('clientes/componentes/header');
		$this->load->view('clientes/carrito/vista_Carrito');
		$this->load->view('clientes/componentes/footer');
	}
}
