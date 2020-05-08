<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('ModeloLogear');
  }

  function index(){
    $this->load->view('iniciarsesion');
  }

  function auth(){
    $email      = $this->input->post('email',TRUE);
    $password   = md5($this->input->post('password',TRUE));
    $validate   = $this->ModeloLogear->validate($email,$password);
   
    if($validate->num_rows() > 0)
    {
        $data  = $validate->row_array();

        $id_usuario         = $data['u_id'];
        $nit_tusuario       = $data['u_nitter'];
        $usuario            = $data['u_usuario'];
        $nombre_usuario     = $data['u_username'];
        $tipo_usuario       = $data['u_tipo'];
        
        $sesdata = array(
            'id_usuario'        => $id_usuario,
            'usuario'           => $usuario,
            'nit_tusuario'      => $nit_tusuario,
            'nombre_usuario'    => $nombre_usuario,
            'tipo_usuario'      => $tipo_usuario,
            'logged_in'         => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($tipo_usuario === '1'){
            redirect('page');

        // access login for staff
        }elseif($tipo_usuario === '2'){
            redirect('page');

        // access login for author
        }else{
            redirect('page');
        }
    }else{
        echo $this->session->set_flashdata('msg',' <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger"><strong>MENSAJE!</strong> <br><hr> <p>Algo salio mal revise el Usuario o contraseña  </p></div>
                </div>
            </div>');
        redirect('login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }

}
