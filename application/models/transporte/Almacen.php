<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Almacen extends CI_Model {

    //private $tabla = 'transporte.comercio'; //esto se hace para no tener necesidad de confundirse con las tablas 

    public function __construct() {
//        parent::__construct();
        $this->load->database();

    }

    //INSERTAR INFORMACION
    
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
      
    public function registro_chofer($data) {
        $this->db->insert('almacenes_chofer', array(
            'id' => $data['cod_chofer'],
            'cedula' => $data['cedula_chofer'],
            'nombre' => $data['nombre_chofer'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo'],
            'usiario_id' => $data['cod_usuario']
        ));
    } 
    public function registro_cliente($data) {
        $this->db->insert('almacenes_cliente', array(
            'id' => $data['cod_cliente'],
            'rif' => $data['rif_cliente'],
            'razon_social' => $data['razon_social'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo'],
            'usiario_id' => $data['cod_usuario']
        ));
    }
    public function registro_producto($data) {
        $this->db->insert('almacenes_producto', array(
            'id' => $data['cod_producto'],
            'nombre' => $data['nombre_producto'],
            'codigo' => $data['codigo_producto'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo'],
            'usiario_id' => $data['cod_usuario']
        ));
    }
    
    public function registro_proveedor($data) {
        $this->db->insert('almacenes_proveedor', array(
            'id' => $data['cod_proveedor'],
            'rif' => $data['rif'],
            'razon_social' => $data['razon_social'],
            'creado' => $data['fecha_creado'],
            'observacion' => $data['observacion'],
            'activo' => $data['activo'],
            'usiario_id' => $data['cod_usuario']
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
            'usuario_id' => $data['usuario']
            
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
            'activo' => $data['activo'],
            'usuario_id' => $data['usuario']
        ));
    }
    
         public function reg_usuario($data) {
        $this->db->insert('auth_user', array(
            'id' => $data['cod_usuario'],
            'password' => $data['clave'],
            'last_login' => $data['ultimo_acceso'],
            'username' => $data['usuario'],
            'first_name' => $data['nombre'],
            'last_name' => $data['apellido'],
            'email' => $data['correo'],
            'is_staff' => $data['equipo'],
            'is_active' => $data['activo'],
            'date_joined' => $data['fecha_registro']
        ));
    }
  //INSERTAR INFORMACION    
    
   
    
//    public function registrocom($data){ /*Registro del Comercio*/
////    public function crear(
//        $this->db->insert('comercio',
//        array(
//        'id_producto' => $data['producto_numero'],
//        'nombre' => $data['nombre_producto'],
//        'cantidad' => $data['cant_producto'],
//        'precio' => $data['precio_producto']));
//  }
//    
//    public function registro_mecanico($data) {
//        $this->db->insert('mecanico', array(
//            'cedula' => $data['cedula_mecanico'],
//            'nombre_m' => $data['nombre_mecanico'],
//            'apellido_m' => $data['apellido_mecanico'],
//            'direccion' => $data['direccion'],
//            'id_cargo' => $data['cargo'],
//            'id_em' => $data['estado_mecanico']
//        ));
//    }
//    public function registro_cargo($data) {
//        $this->db->insert('cargo', array(
//            'id_cago' => $data['cod_cargo'],
//            'cargo' => $data['cargo']
//        ));
//    }
//    
//  public function reg_esp_movil($data) {
//        $this->db->insert('esp_movil', array(
//            'id_espmovil' => $data['id_espmovil'],
//            'marca_movil' => $data['marca_movil'],
//            'modelo_movil' => $data['modelo_movil'],
//            'tipo_movil' => $data['tipo_movil']
//        ));
//    }
//    
// public function reg_movil($data) {
//        $this->db->insert('movil', array(
//            'id_movil' => $data['cod_movil'],
//            'id_espmovil' => $data['id_espmovil'],
//            'id_estadomovil' => $data['id_estadomovil'],
//            'matricula' => $data['matricula'],
//            'fecha' => $data['fecha_registro'],
//            'id_uresp' => $data['id_uresp'],
//            'km_inicial' => $data['km_inicial']
//        ));
//    }
//
//     public function reg_orden_trabajo($data) {
//        $this->db->insert('orden_trabajo', array(
//            'id_orden' => $data['cod_orden'],
//            'id_movil' => $data['cod_movil'],
//            'id_eot' => $data['cod_eot'],
//            'id_mecanico' => $data['cod_mecanico'],
//            'fecha_eot' => $data['fecha_reg_eot'],
//            'fecha_cot' => $data['fecha_reg_cot'],
//            'km_actual' => $data['km_actual'],
//            'id_tot' => $data['cod_tot']
//        ));
//    }
//     public function reg_pieza($data) {
//        $this->db->insert('pieza', array(
//            'id_pieza' => $data['cod_pieza'],
//            'nom_pieza' => $data['nom_pieza'],
//            'descripcion' => $data['descripcion'],
//            'km_pieza' => $data['km_pieza']
//        ));
//    }
//     public function reg_tipo_usuario($data) {
//        $this->db->insert('tipo_usuario', array(
//            'id_tipou' => $data['cod_tipou'],
//            'nom_tipou' => $data['nom_tipou']
//        ));
//    }
//     public function reg_unidad_resp($data) {
//        $this->db->insert('unidad_resp', array(
//            'id_uresp' => $data['cod_uresp'],
//            'nom_uresp' => $data['nom_uresp']
//        ));
//    }
//     public function reg_unidad_responsable($data) {
//        $this->db->insert('unidad_responsable', array(
//            'id_unidad_responsable' => $data['cod_unidad_responsable'],
//            'unidad_responsable' => $data['unidad_responsable']
//        ));
//    }

    
    //MODIFICAR INFORMACION
    

}
