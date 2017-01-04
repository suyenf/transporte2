<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Almacenmodel extends CI_Model {

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

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (empty($data['activo']))
            $act = 0;
        else
            $act = 1;

        $this->db->insert('almacenes_chofer', array(
            'cedula' => $data['cedula'],
            'nombre' => $data['nombre'],
            'creado' => $hoy,
            'observacion' => $data['observacion'],
            'activo' => $act,
            'usuario_id' => 1
        ));
    } 

    public function registro_cliente($data) {

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (empty($data['activo']))
            $act = 0;
        else
            $act = 1;

        $this->db->insert('almacenes_cliente', array(
            'rif' => $data['rif_cliente'],
            'razon_social' => $data['razon_social'],
            'creado' => $hoy,
            'observacion' => $data['observacion'],
            'activo' => $act,
            'usuario_id' => 1
        ));
    }

    public function registro_producto($data) {

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (empty($data['activo']))
            $act = 0;
        else
            $act = 1;

        $this->db->insert('almacenes_producto', array(
            'nombre' => $data['nombre_producto'],
            'codigo' => $data['codigo_producto'],
            'creado' => $hoy, //este campo sera automatico
            'observacion' => $data['observacion'],
            'activo' => $act,
            'usuario_id' => 1 //se coloca 1 como prueba
            //usuario logueado del sistema - Tambien puede ser removido el campo
        ));
    }
    
    public function registro_proveedor($data) {

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (empty($data['activo']))
            $act = 0;
        else
            $act = 1;

        $this->db->insert('almacenes_proveedor', array(
            'rif' => $data['rif_proveedor'],
            'razon_social' => $data['razon_social'],
            'creado' => $hoy,
            'observacion' => $data['observacion'],
            'activo' => $act,
            'usuario_id' => 1
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

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (empty($data['activo']))
            $act = 0;
        else
            $act = 1;

        $this->db->insert('almacenes_vehiculo', array(
            'placa' => $data['placa'],
            'placa_chuto' => $data['placa_chuto'],
            'placa_tanque' => $data['placa_tanque'],
            'marca' => $data['marca'],
            'modelo' => $data['modelo'],
            'anio' => $data['anio'],
            'creado' => $hoy,
            'observacion' => $data['observacion'],
            'activo' => $act,
            'usuario_id' => 1
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
    
    public function listar_chofer() {
        $query = $this->db->get('almacenes_chofer');
        
        return $query->result_array();
    }
}
