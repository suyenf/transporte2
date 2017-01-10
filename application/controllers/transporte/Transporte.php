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
            'cod_carga' => $this->input->post('id'),
            'fecha_registro' => $this->input->post('fecha'),
            'correlativo_id' => $this->input->post('correlativo_id'),
            'origen_flete' => $this->input->post('origen_flete'),
            'destino_flete' => $this->input->post('destino_flete'),
            'unidad' => $this->input->post('unidad'),
            'monto_viatico' => $this->input->post('monto_viatico'),
            'observacion' => $this->input->post('observacion'),
            'estado' => $this->input->post('estado'),
            'activo' => $this->input->post('activo'),
            'chofer_id' => $this->input->post('chofer_id'),
            'cliente_id' => $this->input->post('cliente_id'),
            'producto_id' => $this->input->post('producto_id'),
            'proveedor_id' => $this->input->post('proveedor_id'),
            'vehiculo_id' => $this->input->post('vehiculo_id'),
            'usuario_id' => $this->input->post('usuario_id')
      
        );
        $resultado['almacenes_carga'] = $this->almacenmodel->registro_carga($data);
        print_r($data);
        $this->load->view('transporte/reg_carga',$resultado);
    }
    
    public function crear_producto(){
		
		$this->form_validation->set_rules('nombre_producto', 'Nombre de producto', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('codigo_producto', 'Codigo de producto', 'required|min_length[5]|max_length[10]');
		
        $data = array(
            'nombre_producto' => $this->input->post('nombre_producto'),
            'codigo_producto' => $this->input->post('codigo_producto'),
            'observacion' => $this->input->post('observacion'),
            // Falta validar el combo de activo
            'activo' => $this->input->post('activo')
        );

        //$data['choferes'] = $this->almacenmodel->listar_chofer();
            
		if ($this->form_validation->run() == FALSE)
			$this->load->view('transporte/reg_producto');
		else
			$resultado['almacenes_producto'] = $this->almacenmodel->registro_producto($data);
    }

    public function crear_cliente(){

        $data = array(
            'rif_cliente' => $this->input->post('rif_cliente'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_cliente'] = $this->almacenmodel->registro_cliente($data);

        $this->load->view('transporte/reg_cliente');
    }
    
    public function crear_chofer(){

        $data = array(
            'cedula' => $this->input->post('cedula'),
            'nombre' => $this->input->post('nombre'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_chofer'] = $this->almacenmodel->registro_chofer($data);

        $this->load->view('transporte/reg_chofer');
    }

    public function crear_proveedor(){
		
        $data = array(
            'rif_proveedor' => $this->input->post('rif_proveedor'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_proveedor'] = $this->almacenmodel->registro_proveedor($data);

        $this->load->view('transporte/reg_proveedor');
    }

    public function crear_vehiculo(){
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $data = array(
            'placa' => $this->input->post('placa'),
            'placa_chuto' => $this->input->post('placa_chuto'),
            'placa_tanque' => $this->input->post('placa_tanque'),
            'modelo' => $this->input->post('modelo'),
            'marca' => $this->input->post('marca'),
            'anio' => $this->input->post('anio'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_vehiculo'] = $this->almacenmodel->registro_vehiculo($data);

        $this->load->view('transporte/reg_vehiculo');
    }
}
