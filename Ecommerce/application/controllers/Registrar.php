<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {

	public function index()
	{
		$this->load->view('componentes/header');
		$this->load->view('registrar');
		$this->load->view('componentes/footer');		
	}
}
