<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transporte
 *
 * @author SuYen
 */
class Transporte extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->view('base/cabeceras/cabecera_1');

        //Datos de usuario logueado al sistema
        $this->load->library('session');
        $data['usuario'] = $this->session->userdata('usuario_id');
        $this->load->view('base/cabeceras/menu_', $data);

        $this->load->view('base/piespagina/piepagina_1'); 
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $this->load->library('form_validation');
        $this->config->set_item('language','spanish');
    }
   
    public function index() {
        if($this->session->userdata('login'))
           $this->load->view('base/home');    
        else
            redirect('Welcome/login', 'refresh');
    }

    public function crear_carga(){

        $this->form_validation->set_rules('origen_flete', 'Origen Flete', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('destino_flete', 'Destino Flete', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('monto_viatico', 'monto', 'required|min_length[1]|numeric');
        $this->form_validation->set_rules('peso', 'peso', 'required|min_length[1]|numeric');
        $this->form_validation->set_rules('pesot', 'peso', 'required|min_length[1]|numeric');

        $data = array(
            'origen_flete' => $this->input->post('origen_flete'),
            'destino_flete' => $this->input->post('destino_flete'),
            'unidad' => $this->input->post('unidad'),
            'monto_viatico' => $this->input->post('monto_viatico'),
            'peso' => $this->input->post('peso'),
            'pesot' => $this->input->post('pesot'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo'),
            'chofer_id' => $this->input->post('chofer'),
            'cliente_id' => $this->input->post('cliente'),
            'producto_id' => $this->input->post('producto'),
            'proveedor_id' => $this->input->post('proveedor'),
            'vehiculo_id' => $this->input->post('vehiculo')
        );

        $data['productos'] = $this->almacenmodel->listar_productos();
        $data['clientes'] = $this->almacenmodel->listar_clientes();
        $data['proveedores'] = $this->almacenmodel->listar_proveedores();
        $data['choferes'] = $this->almacenmodel->listar_choferes();
        $data['vehiculos'] = $this->almacenmodel->listar_vehiculos();
        
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_carga',$data);
        else{
            $this->almacenmodel->registro_carga($data);
            redirect('transporte/Transporte/cargas','refresh');
        }
    }
    
    public function crear_producto(){
        
        $this->form_validation->set_rules('nombre_producto', 'Nombre de producto', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('codigo_producto', 'Codigo de producto', 'required|min_length[5]|max_length[10]');
        
        $data = array(
            'nombre_producto' => $this->input->post('nombre_producto'),
            // Este campo se debe validar sea unico en la tabla
            'codigo_producto' => $this->input->post('codigo_producto'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
            
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_producto');
        else{
            $this->almacenmodel->registro_producto($data);
            redirect('transporte/Transporte/productos','refresh');
        }
    }

    public function crear_cliente(){
        
        $this->form_validation->set_rules('rif_cliente', 'Rif Cliente', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('razon_social', 'Razon Social', 'required|min_length[5]|max_length[100]');

        $data = array(
            //Validar campo unico
            'rif_cliente' => $this->input->post('rif_cliente'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_cliente');
        else{
            $this->almacenmodel->registro_cliente($data);
            redirect('transporte/Transporte/clientes','refresh');
        }
    }
    
    public function crear_proveedor(){
        
        $this->form_validation->set_rules('rif_proveedor', 'Rif Proveedor', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('razon_social', 'Razon Social', 'required|min_length[5]|max_length[100]');
        
        $data = array(
            // Campo unico en la bd
            'rif_proveedor' => $this->input->post('rif_proveedor'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_proveedor');
        else{
            $this->almacenmodel->registro_proveedor($data);
            redirect('transporte/Transporte/proveedores','refresh');
        }
    }

    public function crear_vehiculo(){
        
        //Ojo no se cuales son las especificaciones para una placa asi que las saltare por ahora
        $this->form_validation->set_rules('placa_tanque', 'placa tanque', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('placa_chuto', 'placa chuto', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('placa', 'placa', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('anio', 'anio', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('marca', 'marca', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('modelo', 'modelo', 'required|min_length[5]|max_length[20]');

        $data = array(
            //Imagino que la placa si debe ser unica
            'placa' => $this->input->post('placa'),
            'placa_chuto' => $this->input->post('placa_chuto'),
            'placa_tanque' => $this->input->post('placa_tanque'),
            'modelo' => $this->input->post('modelo'),
            'marca' => $this->input->post('marca'),
            'anio' => $this->input->post('anio'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_vehiculo');
        else{
            $this->almacenmodel->registro_vehiculo($data);
            redirect('transporte/Transporte/vehiculos','refresh');
        }
    }

    public function productos(){
        //if (!$this->session->userdata('usuario_id')){
            $data['productos'] = $this->almacenmodel->obtener(NULL, 'almacenes_producto', NULL);
            $this->load->view('transporte/list_productos',$data);
        //}else
            //$this->load->view('login');
    }

    public function clientes(){
        
        $data['clientes'] = $this->almacenmodel->obtener(NULL, 'almacenes_cliente', NULL);
        $this->load->view('transporte/list_cliente',$data);
    }

    public function proveedores(){
        
        $data['proveedores'] = $this->almacenmodel->obtener(NULL, 'almacenes_proveedor', NULL);
        $this->load->view('transporte/list_proveedor',$data);
    }

    public function choferes(){
        
        $data['choferes'] = $this->almacenmodel->obtener(NULL, 'almacenes_chofer', NULL);
        $this->load->view('transporte/list_chofer',$data);
    }

    public function vehiculos(){
        
        $data['vehiculos'] = $this->almacenmodel->obtener(NULL, 'almacenes_vehiculo', NULL);
        $this->load->view('transporte/list_vehiculo',$data);
    }

    public function cargas(){
        
        $data['cargas'] = $this->almacenmodel->traer_cargas();
        //Convierto los id's a nombres
//        print $data['chofer_id'];
        
        $this->load->view('transporte/list_carga',$data);
    }

    public function crear_entrada(){

        //$this->form_validation->set_rules('peso', 'peso', 'required|min_length[1]');
        $this->form_validation->set_rules('monto_peaje', 'Monto Peaje', 'required|min_length[1]');
        $this->form_validation->set_rules('monto_caleta', 'Monto Caleta', 'required|min_length[1]');
        
        $data = array(
            'peso' => $this->input->post('peso'),
            'monto_peaje' => $this->input->post('monto_peaje'),
            'monto_caleta' => $this->input->post('monto_caleta'),
            'correlativo' => $this->input->post('correlativo'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')    
        );

        $data['cargas'] = $this->almacenmodel->listar_cargas();
        
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_recepcion',$data);
        else{
            $this->almacenmodel->registro_recepcion($data);
            redirect('transporte/Transporte/recepciones','refresh');
        }
    }
    
    public function modificar_producto(){
		
		//Obtengo el id del producto a editar del segmento
		$id = $this->uri->segment(4);
		$this->form_validation->set_rules('nombre_producto', 'Nombre de producto', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('codigo_producto', 'Codigo de producto', 'required|min_length[5]|max_length[10]');
        
        $data = array(
			'id' => $id,
            'nombre_producto' => $this->input->post('nombre_producto'),
            // Este campo se debe validar sea unico en la tabla
            'codigo_producto' => $this->input->post('codigo_producto'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
            
        if ($this->form_validation->run() == FALSE){
            $data['productos'] = $this->almacenmodel->obtener($id, 'almacenes_producto', NULL);
			$this->load->view('transporte/mod_producto',$data);
        }else{
            $this->almacenmodel->mod_pro($data);
            redirect('transporte/Transporte/productos','refresh');
        }
	}

    public function modificar_cliente(){
        
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('rif_cliente', 'Rif Cliente', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('razon_social', 'Razon Social', 'required|min_length[5]|max_length[100]');

        $data = array(
            'id' => $id,
            //Validar campo unico
            'rif_cliente' => $this->input->post('rif_cliente'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        if ($this->form_validation->run() == FALSE){
            $data['clientes'] = $this->almacenmodel->obtener($id, 'almacenes_cliente', NULL);
            $this->load->view('transporte/mod_cliente', $data);
        }else{
            $this->almacenmodel->mod_cli($data);
            redirect('transporte/Transporte/clientes','refresh');
        }
    }

    public function modificar_chofer(){

        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('cedula', 'Cedula', 'required|max_length[8]');
        $this->form_validation->set_rules('nombre', 'Nombre Chofer', 'required|max_length[100]');

        $data = array(
            'id' => $id,
            // Validar cedula sea unico en la bd
            'cedula' => $this->input->post('cedula'),
            'nombre' => $this->input->post('nombre'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        
        if ($this->form_validation->run() == FALSE){
            $data['choferes'] = $this->almacenmodel->obtener($id, 'almacenes_chofer', NULL);
            $this->load->view('transporte/mod_chofer', $data);
        }else{
            $this->almacenmodel->mod_cho($data);
            redirect('transporte/Transporte/choferes','refresh');
        }
    }

    public function modificar_proveedor(){
        
        $id = $this->uri->segment(4);
        $this->form_validation->set_rules('rif_proveedor', 'Rif Proveedor', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('razon_social', 'Razon Social', 'required|min_length[5]|max_length[100]');
        
        $data = array(
            'id' => $id,
            // Campo unico en la bd
            'rif_proveedor' => $this->input->post('rif_proveedor'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        
        if ($this->form_validation->run() == FALSE){
            $data['proveedores'] = $this->almacenmodel->obtener($id, 'almacenes_proveedor', NULL);
            $this->load->view('transporte/mod_proveedor', $data);
        }else{
            $this->almacenmodel->mod_prov($data);
            redirect('transporte/Transporte/proveedores','refresh');
        }
    }

    public function modificar_vehiculo(){
        
        $id = $this->uri->segment(4);
        //Ojo no se cuales son las especificaciones para una placa asi que las saltare por ahora
        $this->form_validation->set_rules('placa_tanque', 'placa tanque', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('placa_chuto', 'placa chuto', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('placa', 'placa', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('anio', 'año', 'required|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('marca', 'marca', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('modelo', 'modelo', 'required|min_length[5]|max_length[20]');

        $data = array(
            'id' => $id,
            //Imagino que la placa si debe ser unica
            'placa' => $this->input->post('placa'),
            'placa_chuto' => $this->input->post('placa_chuto'),
            'placa_tanque' => $this->input->post('placa_tanque'),
            'modelo' => $this->input->post('modelo'),
            'marca' => $this->input->post('marca'),
            'anio' => $this->input->post('anio'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        
        if ($this->form_validation->run() == FALSE){
            $data['vehiculos'] = $this->almacenmodel->obtener($id, 'almacenes_vehiculo', NULL);
            $this->load->view('transporte/mod_vehiculo', $data);
        }else{
            $this->almacenmodel->mod_veh($data);
            redirect('transporte/Transporte/vehiculos','refresh');
        }
    }

}
