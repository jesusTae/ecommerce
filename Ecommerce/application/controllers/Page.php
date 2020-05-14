<?php
class Page extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE)
    {
      redirect('login');
    }
  }

  function index()
  {
    //Allowing akses to admin only
      if($this->session->userdata('tipo_usuario')==='1')
      {
       
          $this->load->view('administrativo/componentes2/header');
          $this->load->view('administrativo/componentes2/menu');
          $this->load->view('administrativo/welcome');
          $this->load->view('administrativo/componentes2/footer');
         
      }
      elseif($this->session->userdata('tipo_usuario')==='2')
      {
          $this->load->view('clientes/componentes/header');
          $this->load->view('clientes/componentes/menu');
          $this->load->view('clientes/welcome');
          $this->load->view('clientes/componentes/footer');
      }
      elseif($this->session->userdata('tipo_usuario')==='3')
      {
          // $this->load->view('componentes2/header');
          // $this->load->view('componentes2/menu');
          $this->load->view('welcome');
          //$this->load->view('componentes2/footer');
      }
      else
      {
        echo "Access Denied";
      }
  }

  /*function staff(){
    //Allowing akses to staff only
    if($this->session->userdata('level')==='2'){
          $this->load->view('componentes/header');
          $this->load->view('componentes/menu');
          $this->load->view('dashboard_view');
          $this->load->view('componentes/footer');
    }else{
        echo "Access Denied";
    }
  }

  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')==='3'){
          $this->load->view('componentes/header');
          $this->load->view('componentes/menu');
          $this->load->view('dashboard_view');
          $this->load->view('componentes/footer');
    }else{
        echo "Access Denied";
    }
  }
*/
}
