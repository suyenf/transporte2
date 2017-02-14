<?php
 
defined('BASEPATH') or exit('No direct script access allowed');

class Autenticacion_Model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }
 
  function Autenticacion_Model()
  {
    parent::Model();
  }
 
  function verificaUsuario($usuario, $contrasena){

    $this->db->select('id, username');
    $this->db->where('username', $usuario);
    $this->db->where('password', $contrasena);
    $this->db->limit(1);
    $query = $this->db->get('auth_user');

    // si el resultado de la query es positivo
    if ($query->num_rows() > 0)
        return TRUE;
    else
        return FALSE;
  }
 
}