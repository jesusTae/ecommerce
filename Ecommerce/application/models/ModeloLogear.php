<?php
class ModeloLogear extends CI_Model{

  function validate($email,$password){
    $this->db->where('u_nitter',$email);
    $this->db->where('u_password',$password);
    $this->db->where('u_estado',1);
    $result = $this->db->get('tbl_usuarios',1);
    return $result;
  }

}
