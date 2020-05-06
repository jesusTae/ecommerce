<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('ModeloRegistrar');
	}
	
	public function index()
	{
		$this->load->view('componentes/header');
		$this->load->view('registrar');
		$this->load->view('componentes/footer');		
	}

	public function guardar()
	{
		$data=$this->ModeloRegistrar->getguardar();
		echo json_encode($data);
    }
}
