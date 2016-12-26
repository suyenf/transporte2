<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Almacen extends CI_Model {

    //private $tabla = 'transporte.comercio'; //esto se hace para no tener necesidad de confundirse con las tablas 

    public function __construct() {
//        parent::__construct();
        $this->load->database();

    }

    //INSERTAR INFORMACION
    public function registrocom($data){ /*Registro del Comercio*/
//    public function crear(
        $this->db->insert('comercio',
        array(
        'id_producto' => $data['producto_numero'],
        'nombre' => $data['nombre_producto'],
        'cantidad' => $data['cant_producto'],
        'precio' => $data['precio_producto']));
  }
    
    public function registro_mecanico($data) {
        $this->db->insert('mecanico', array(
            'cedula' => $data['cedula_mecanico'],
            'nombre_m' => $data['nombre_mecanico'],
            'apellido_m' => $data['apellido_mecanico'],
            'direccion' => $data['direccion'],
            'id_cargo' => $data['cargo'],
            'id_em' => $data['estado_mecanico']
        ));
    }
    
    public function registro_proveedor($data) {
        $this->db->insert('almacenes_proveedor', array(
            'id' => $data['cod_proveedor'],
            'rif' => $data['rif'],
            'razon_social' => $data['razon_social'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo']
        ));
    }
    
    public function registro_chofer($data) {
        $this->db->insert('almacenes_chofer', array(
            'id' => $data['cod_chofer'],
            'cedula' => $data['cedula_chofer'],
            'nombre' => $data['nombre_chofer'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo']
        ));
    }
    
    public function registro_cliente($data) {
        $this->db->insert('almacenes_cliente', array(
            'id' => $data['cod_cliente'],
            'rif' => $data['rif_cliente'],
            'razon_social' => $data['razon_social'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo']
        ));
    }
    
    public function registro_producto($data) {
        $this->db->insert('almacenes_producto', array(
            'id' => $data['cod_producto'],
            'nombre' => $data['nombre_producto'],
            'codigo' => $data['codigo_producto'],
            'unidad' => $data['unidad_producto'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo']
        ));
    }
    
    public function registro_vehiculo($data) {
        $this->db->insert('almacenes_vehiculo', array(
            'id' => $data['cod_vehiculo'],
            'placa' => $data['numero_placa'],
            'placa_chuto' => $data['placa_chuto'],
            'placa_tanque' => $data['placa_tanque'],
            'marca' => $data['marca_vehiculo'],
            'modelo' => $data['modelo'],
            'anio' => $data['anio'],
            'creado' => $data['creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo']
        ));
    }
    
    public function registro_recepcion($data) {
        $this->db->insert('almacenes_recepcion', array(
            'id' => $data['cod_recepcion'],
            'fecha' => $data['fecha_registro'],
            'peso' => $data['peso'],
            'monto_peaje' => $data['monto_peaje'],
            'monto_caleta' => $data['monto_caleta'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo'],
            'correlativo_id' => $data['correlativo_id'],
            'usuario_id' => $data['usuario'],
            
        ));
    }
    
    public function registro_carga($data) {
        $this->db->insert('almacenes_carga', array(
            'id' => $data['cod_carga'],
            'fecha' => $data['fecha_registro'],
            'correlativo_id' => $data['correlativo_id'],
            'origen_flete' => $data['origen_flete'],
            'destino_flete' => $data['destino_flete'],
            'unidad' => $data['unidad'],
            'monto_viatico' => $data['monto_viatico'],
            'observacion' => $data['observacion'],
            'estado' => $data['estado'],
            'activo' => $data['activo'],
            'chofer_id' => $data['chofer_id'],
            'cliente_id' => $data['cliente_id'],
            'producto_id' => $data['producto_id'],
            'proveedor_id' => $data['proveedor_id'],
            'vehiculo_id' => $data['vehiculo_id'],
            'usuario_id' => $data['usuario_id']
            
        ));
    }
    

    
    
    
    
    
    
    
    
    
    
    
    }
