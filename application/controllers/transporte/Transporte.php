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


//        $data['titulo'] = 'Control de Produccion'; // jcapuano

//        $this->load->library('auth'); // jcapuano
        //CAMBIAR LA URL SI SE SUBE A LA WEB, esta es la ruta => (config/config.php/$config['base_url'] = 'http://localhost/transporte2/';)
        $this->load->view('base/cabeceras/cabecera_1');
        $this->load->view('base/cabeceras/menu_');
        $this->load->view('base/piespagina/piepagina_1');
        $this->load->helper('url');
    }
//        private function cab($data) {
//
//        $this->load->view('base/cabeceras/cabecera', $data);
//        $this->load->view('base/cabeceras/menu', $data);
//    }
//
//    private function pie() {
//        $this->load->view('base/piespagina/piepagina_1');
//    }
    
    
    
    
    public function index() {
            
    }

 public function crear_carga(){
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
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
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $data = array(
            'nombre_producto' => $this->input->post('nombre_producto'),
            'codigo_producto' => $this->input->post('codigo_producto'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );

        $data['choferes'] = $this->almacenmodel->listar_chofer();
            
        $resultado['almacenes_producto'] = $this->almacenmodel->registro_producto($data);
//        print_r($data);
        $this->load->view('transporte/reg_producto');
    }

    public function crear_cliente(){
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $data = array(
            'rif_cliente' => $this->input->post('rif_cliente'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_cliente'] = $this->almacenmodel->registro_cliente($data);
        //print_r($data);
        $this->load->view('transporte/reg_cliente');
    }
    
    public function crear_chofer(){
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $data = array(
            'cedula' => $this->input->post('cedula'),
            'nombre' => $this->input->post('nombre'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_chofer'] = $this->almacenmodel->registro_chofer($data);
        //print_r($data);
        $this->load->view('transporte/reg_chofer');
    }

    public function crear_proveedor(){
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $data = array(
            'rif_proveedor' => $this->input->post('rif_proveedor'),
            'razon_social' => $this->input->post('razon_social'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_proveedor'] = $this->almacenmodel->registro_proveedor($data);
        print_r($data);
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
        print_r($data);
        $this->load->view('transporte/reg_vehiculo');
    }
}
