<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Autenticacion_Model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->config->set_item('language','spanish'); 
    }

	public function index() {
		//Si ya esta logueado lo manda a la principal
		if ($this->session->userdata('login'))
			redirect('transporte/Transporte', 'refresh');
		else
			redirect('Welcome/login', 'refresh');
	}

	public function login() {

    if ($this->input->post('usuario')){
    	$usuario = $this->input->post('usuario');
    	$contrasena = md5($this->input->post('contrasena'));

      if ($this->Autenticacion_Model->verificaUsuario($usuario, $contrasena)){

        $datasession = array(
          'usuario_id'  => $usuario,
          'login' => TRUE
        );
        // creamos la sesión con dichas variables
        $this->session->set_userdata($datasession);
        // y redirigimos al controlador principal
        redirect('transporte/Transporte', 'refresh');
      }else 
        $this->load->view('login');
    }else
    	$this->load->view('login');
  }

  public function logout() {
    // creamos un array con las variables de sesión en blanco
    $datasession = array('usuario_id' => '', 'login' => '');
    // y eliminamos la sesión
    $this->session->unset_userdata($datasession);
    $this->session->sess_destroy();
    // redirigimos al controlador principal
    redirect('Welcome/login', 'refresh');
  }
}
