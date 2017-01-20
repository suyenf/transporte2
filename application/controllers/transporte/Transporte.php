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
        $this->load->view('base/cabeceras/menu_');
        $this->load->view('base/piespagina/piepagina_1');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $this->load->library('form_validation');
    }
   
    public function index() {
      $this->load->view('base/home');      
    }

    
    
 public function crear_carga(){
        
        $data = array(
            //Analizar un correlativo es el ID del registro
            //'correlativo_id' => $this->input->post('correlativo_id'),
            'origen_flete' => $this->input->post('origen_flete'),
            'destino_flete' => $this->input->post('destino_flete'),
            'unidad' => $this->input->post('unidad'), //Esto es un combo html normal, la explicacion en la vista
            'monto_viatico' => $this->input->post('monto_viatico'),
            'observacion' => $this->input->post('observacion'),
            'estado' => 'cargado', //Campo interno se muestra en vista
            'activo' => $this->input->post('activo'),
            'chofer_id' => $this->input->post('chofer_id'),
            'cliente_id' => $this->input->post('cliente_id'),
            'producto_id' => $this->input->post('producto_id'),
            'proveedor_id' => $this->input->post('proveedor_id'),
            'vehiculo_id' => $this->input->post('vehiculo_id')      
        );

        $data['productos'] = $this->almacenmodel->listar_productos();
        $data['clientes'] = $this->almacenmodel->listar_clientes();
        $data['proveedores'] = $this->almacenmodel->listar_proveedores();
        $data['choferes'] = $this->almacenmodel->listar_choferes();
        $data['vehiculos'] = $this->almacenmodel->listar_vehiculos();
        
        $resultado['almacenes_carga'] = $this->almacenmodel->registro_carga($data);
        //print_r($data);
        $this->load->view('transporte/reg_carga',$data);
        $this->load->view('transporte/reg_producto_modal');
        $this->load->view('transporte/reg_proveedor_modal');
        
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
        else
            $resultado['almacenes_producto'] = $this->almacenmodel->registro_producto($data);
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
        else
            $resultado['almacenes_cliente'] = $this->almacenmodel->registro_cliente($data);
    }
    
    public function crear_chofer(){

        $this->form_validation->set_rules('cedula', 'Cedula', 'required|max_length[8]');
        $this->form_validation->set_rules('nombre', 'Nombre Chofer', 'required|max_length[100]');

        $data = array(
            // Validar cedula sea unico en la bd
            'cedula' => $this->input->post('cedula'),
            'nombre' => $this->input->post('nombre'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        
        if ($this->form_validation->run() == FALSE)
            $this->load->view('transporte/reg_chofer');
        else
            $resultado['almacenes_chofer'] = $this->almacenmodel->registro_chofer($data);
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
        else
            $resultado['almacenes_proveedor'] = $this->almacenmodel->registro_proveedor($data);
    }

    public function crear_vehiculo(){
        
        //Ojo no se cuales son las especificaciones para una placa asi que las saltare por ahora
        $this->form_validation->set_rules('rif_proveedor', 'Rif Proveedor', 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('razon_social', 'Razon Social', 'required|min_length[5]|max_length[100]');

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
        else
            $resultado['almacenes_vehiculo'] = $this->almacenmodel->registro_vehiculo($data);
    }

    public function productos(){
        
        $data['productos'] = $this->almacenmodel->traer_productos();
        $this->load->view('transporte/list_productos',$data);
    }
}
