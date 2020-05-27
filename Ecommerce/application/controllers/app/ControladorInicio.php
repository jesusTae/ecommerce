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
		$this->load->model('app/ModeloInicio');
	
	}
	
	function index()
    {
	
		$this->load->view('app/componentes/header');
		$this->load->view('app/componentes/menu');
		$this->load->view('app/welcome');
		$this->load->view('app/componentes/footer');
    }
    
	public function todo()
	{
		$data=$this->ModeloInicio->gettodo();
		echo json_encode($data);
	}

	public function slaider()
	{
		$data=$this->ModeloInicio->getslaider();
		echo json_encode($data);
	}

	function productos()
    {
	
		$categoria = $this->input->post('categoria');

		$this->load->view('app/componentes/header');
		$this->load->view('app/componentes/menu');
		$this->load->view('app/categorias',['result'=>$categoria]);
		$this->load->view('app/componentes/footer');
    }
}