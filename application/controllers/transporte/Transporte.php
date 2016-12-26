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

    public function crear_comercio(){
        $this->load->helper('form');
        $this->load->model('transporte/almacen');
        $data = array(
            'producto_numero' => $this->input->post('id_producto'),
            'nombre_producto' => $this->input->post('nombre'),
            'cant_producto' => $this->input->post('cantidad'),
            'precio_producto' => $this->input->post('precio')
        );
        $resultado['comercio'] = $this->almacen->registrocom($data);
        //            //ARRAY[TABLA] = CARGA EL VALOS QUE SE INGRESA EN $a USANDO UN FUNCION
        //            //DE OTRO MODELO MOSTRANDO ASI LA BUSQUEDA DE LOS DATOS 
        //            //print_r($result);
               print_r($data);

        $this->load->view('transporte/reg_comercio',$resultado);
    }

    public function crear_mecanico(){
        $this->load->helper('form');
        $this->load->model('transporte/almacen');
        $data = array(
            'cedula_mecanico' => $this->input->post('cedula'),
            'nombre_mecanico' => $this->input->post('nombre_m'),
            'apellido_mecanico' => $this->input->post('apellido_m'),
            'direccion' => $this->input->post('direccion'),
            'cargo' => $this->input->post('id_cargo'),
            'estado_mecanico' => $this->input->post('id_em')
        );
        $resultado['mecanico'] = $this->almacen->registro_mecanico($data);
        //            //ARRAY[TABLA] = CARGA EL VALOS QUE SE INGRESA EN $a USANDO UN FUNCION
        //            //DE OTRO MODELO MOSTRANDO ASI LA BUSQUEDA DE LOS DATOS 
        //            //print_r($result);
        print_r($data);
        $this->load->view('transporte/reg_mecanico',$resultado);
    }

    
}
