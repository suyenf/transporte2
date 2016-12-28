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
        //            //ARRAY[TABLA] = CARGA EL VALOS QUE SE INGRESA EN $a USANDO UN FUNCION
        //            //DE OTRO MODELO MOSTRANDO ASI LA BUSQUEDA DE LOS DATOS 
        //            //print_r($result);
        print_r($data);
        $this->load->view('transporte/reg_carga',$resultado);
    }

    public function choferes($datos) {
       /* 1 LLAMAR  / $this->load->model('archivo del modelo');
          /* 2 CARGAR  / $result['TABLA A VER'] = $this->NOMBRE DEL MODELO->LA FUNCION QUE DESEA QUE ESTA DENTRO DEL MODELO SELECCIONADO();
          /* 3 IMPRIMIR/ $this->load->view('ejemplo_1', $result);
         */

        //$this->load->helper('form');
        $this->load->model('transporte/almacenmodel'); //CARGAR EL ARCHIVO DEL MODELO
        $datos['almacenes_chofer'] = $this->almacenmodel->listar_chofer();
        //$this->load->view('produccion/form_o'); //FORM DE BUSCAR
    }
    
    

//    public function crear_comercio(){
//        $this->load->helper('form');
//        $this->load->model('transporte/almacen');
//        $data = array(
//            'producto_numero' => $this->input->post('id_producto'),
//            'nombre_producto' => $this->input->post('nombre'),
//            'cant_producto' => $this->input->post('cantidad'),
//            'precio_producto' => $this->input->post('precio')
//        );
//        $resultado['comercio'] = $this->almacen->registrocom($data);
//        //            //ARRAY[TABLA] = CARGA EL VALOS QUE SE INGRESA EN $a USANDO UN FUNCION
//        //            //DE OTRO MODELO MOSTRANDO ASI LA BUSQUEDA DE LOS DATOS 
//        //            //print_r($result);
//               print_r($data);
//
//        $this->load->view('transporte/reg_comercio',$resultado);
//    }
//
//    public function crear_mecanico(){
//        $this->load->helper('form');
//        $this->load->model('transporte/almacen');
//        $data = array(
//            'cedula_mecanico' => $this->input->post('cedula'),
//            'nombre_mecanico' => $this->input->post('nombre_m'),
//            'apellido_mecanico' => $this->input->post('apellido_m'),
//            'direccion' => $this->input->post('direccion'),
//            'cargo' => $this->input->post('id_cargo'),
//            'estado_mecanico' => $this->input->post('id_em')
//        );
//        $resultado['mecanico'] = $this->almacen->registro_mecanico($data);
//        //            //ARRAY[TABLA] = CARGA EL VALOS QUE SE INGRESA EN $a USANDO UN FUNCION
//        //            //DE OTRO MODELO MOSTRANDO ASI LA BUSQUEDA DE LOS DATOS 
//        //            //print_r($result);
//        print_r($data);
//        $this->load->view('transporte/reg_mecanico',$resultado);
//    }

public function crear_producto(){
        $this->load->helper('form');
        $this->load->model('transporte/almacenmodel');
        $data = array(
            'nombre_producto' => $this->input->post('nombre_producto'),
            'codigo_producto' => $this->input->post('codigo_producto'),
            'observacion' => $this->input->post('observacion'),
            'activo' => $this->input->post('activo')
        );
        $resultado['almacenes_producto'] = $this->almacenmodel->registro_producto($data);
        print_r($data);
        $this->load->view('transporte/reg_producto');
    }
    
}
