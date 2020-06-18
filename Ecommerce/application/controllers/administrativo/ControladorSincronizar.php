<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControladorSincronizar extends CI_Controller
{
    function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE)
        {
            redirect('login');
        }
		//$this->load->model('administrativo/ModeloArticulos');
	
    }
    
	public function index()
	{
		$this->load->view('administrativo/componentes2/header');
		$this->load->view('administrativo/componentes2/menu');
		$this->load->view('administrativo/sincronizar/vista_sincronizar');
		$this->load->view('administrativo/componentes2/footer');
	}

}
?>