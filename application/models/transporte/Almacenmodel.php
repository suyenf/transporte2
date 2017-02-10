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
        
        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

        $peso_bruto = $data['peso'] - $data['pesot'];

        $this->db->insert('almacenes_carga', array(
            'fecha' => $hoy, //Preguntar si se registran a destiempo
            'origen_flete' => $data['origen_flete'],
            'destino_flete' => $data['destino_flete'],
            'unidad' => $data['unidad'],
            'monto_viatico' => $data['monto_viatico'],
            'peso' => $data['peso'],
            'pesot' => $data['pesot'],
            'pesob' => $peso_bruto,
            'observacion' => $data['observacion'],
            'estado' => 1,
            'activo' => $act,
            'chofer_id' => $data['chofer_id'],
            'cliente_id' => $data['cliente_id'],
            'producto_id' => $data['producto_id'],
            'proveedor_id' => $data['proveedor_id'],
            'vehiculo_id' => $data['vehiculo_id'],
            'usuario_id' => 1        
        ));
    }
      
    public function registro_chofer($data) {

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (($data['activo']) == "")
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
        if (($data['activo']) == "")
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

        if (($data['activo']) == "")
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
        if (($data['activo']) == "")
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

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

        //Obtengo el peso por el registro correlativo
        $peso = $this->almacenmodel->obtener($data['correlativo'], 'almacenes_carga', 'pesob');
        $caleta = $data['monto_caleta'];
        
        $pesod = $pesot = $peso - $caleta;
        $pesop = $peso / $caleta;

        if ($pesop < 0)
            $pesop = pesod * -1;

        $this->db->insert('almacenes_recepcion', array(
            'fecha' => $hoy,
            'peso' => $peso,
            'pesot' => $pesot,
            'pesod' => $pesod,
            'pesop' => $pesop,
            'monto_peaje' => $data['monto_peaje'],
            'monto_caleta' => $data['monto_caleta'],
            'creado' => $hoy,
            'observacion' => $data['observacion'],
            'activo' => $act,
            'correlativo_id' => $data['correlativo'],
            'usuario_id' => 1            
        ));

        //Actualizao la carga que le di entrada a status 2
        $this->db->where('id', $data['correlativo']);
        $actualizar = array('estado' => 2);
        $this->db->update('almacenes_carga', $actualizar);
    }
    
    public function registro_vehiculo($data) {

        //Fecha actual - "2016-05-24 15:02:43-04:30"
        $hoy = date("Y-m-d H:i:s");

        //Estado del campo activo
        if (($data['activo']) == "")
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

    public function listar_cargas(){
        $query = $this->db->where('activo','1');
        $query = $this->db->where('estado','1'); //Esto significa que fue cargada pero no se le ha realizado entrada
        $query = $this->db->get('almacenes_carga');
        
        $datos = array();      
        foreach($query->result() as $row)
            $datos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->id, ENT_QUOTES)." - ".htmlspecialchars($row->origen_flete, ENT_QUOTES)."/".htmlspecialchars($row->destino_flete, ENT_QUOTES);

        $query->free_result();
        return $datos;
    }
    
    public function listar_choferes(){
        $query = $this->db->where('activo','1');
        $query = $this->db->get('almacenes_chofer');
        
        $datos = array();      
        foreach($query->result() as $row)
            $datos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->cedula, ENT_QUOTES)." - ".htmlspecialchars($row->nombre, ENT_QUOTES);

        $query->free_result();
        return $datos;
    }
    
    public function listar_productos(){
        $query = $this->db->where('activo','1');
        $query = $this->db->get('almacenes_producto');
        
        $datos = array();      
        foreach($query->result() as $row)
            $datos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->codigo, ENT_QUOTES);

        $query->free_result();
        return $datos;
    }
    
    public function listar_clientes(){
        $query = $this->db->where('activo','1');
        $query = $this->db->get('almacenes_cliente');
        
        $datos = array();
        foreach($query->result() as $row)
            $datos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->rif, ENT_QUOTES)." - ".htmlspecialchars($row->razon_social, ENT_QUOTES);

        $query->free_result();
        return $datos;
    }
    
    public function listar_proveedores(){
        $query = $this->db->where('activo','1');
        $query = $this->db->get('almacenes_proveedor');
        
        $datos = array();
        foreach($query->result() as $row)
            $datos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->rif, ENT_QUOTES)." - ".htmlspecialchars($row->razon_social, ENT_QUOTES);

        $query->free_result();
        return $datos;
    }
    
    public function listar_vehiculos(){
        $query = $this->db->where('activo','1');
        $query = $this->db->get('almacenes_vehiculo');
        
        $datos = array();
        foreach($query->result() as $row)
            $datos[htmlspecialchars($row->id, ENT_QUOTES)] = htmlspecialchars($row->placa, ENT_QUOTES);

        $query->free_result();
        return $datos;
    }

    public function traer_cargas(){

        $datos = array();
        
        $query = $this->db->order_by("fecha desc");
        $query = $this->db->get('almacenes_carga');
        if($query->num_rows() > 0){

            foreach ($query->result() as $fila){
				$fila->chofer_id = $this->almacenmodel->obtener($fila->chofer_id, 'almacenes_chofer', 'nombre');
                $fila->cliente_id = $this->almacenmodel->obtener($fila->cliente_id, 'almacenes_cliente', 'razon_social');
                $fila->proveedor_id = $this->almacenmodel->obtener($fila->proveedor_id, 'almacenes_proveedor', 'razon_social');
                $fila->producto_id = $this->almacenmodel->obtener($fila->producto_id, 'almacenes_producto', 'nombre');
                $fila->vehiculo_id = $this->almacenmodel->obtener($fila->vehiculo_id, 'almacenes_vehiculo', 'placa');
                $datos[] = $fila;
            }
            
			$query->free_result();
            return $datos;
        }else
            return FALSE;
    }
    
    //Esta es una funcion generica para obterner cualquier dato de cualquier tabla por medio de su id
    public function obtener($id = NULL, $tabla, $campo = NULL){

        //Aqui validar si el campo id viene vacio (Traer todo o un registro en especifico
        if($id != NULL){
			$query = $this->db->where('id', $id);
			$valor = array();
		}
        $query = $this->db->order_by("creado desc");
        $query = $this->db->get($tabla);
        
        if($query->num_rows() > 0)
			foreach($query->result() as $row)
				if($id != NULL and $campo != NULL)
					$valor = htmlspecialchars($row->$campo, ENT_QUOTES);
				else
					$valor[] = $row;
					
        $query->free_result();
        return $valor;
    }
    
    public function mod_pro($data) {

        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

		$this->db->where('id', $data['id']);
        $this->db->update('almacenes_producto', array(
            'nombre' => $data['nombre_producto'],
            'codigo' => $data['codigo_producto'],
            'observacion' => $data['observacion'],
            'activo' => $act,
        ));
    }

    public function mod_cli($data) {

        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

        $this->db->where('id', $data['id']);
        $this->db->update('almacenes_cliente', array(
            'rif' => $data['rif_cliente'],
            'razon_social' => $data['razon_social'],
            'observacion' => $data['observacion'],
            'activo' => $act,
        ));
    }

    public function mod_prov($data) {

        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

        $this->db->where('id', $data['id']);
        $this->db->update('almacenes_proveedor', array(
            'rif' => $data['rif_proveedor'],
            'razon_social' => $data['razon_social'],
            'observacion' => $data['observacion'],
            'activo' => $act,
        ));
    }

    public function mod_cho($data) {

        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

        $this->db->where('id', $data['id']);
        $this->db->update('almacenes_chofer', array(
            'cedula' => $data['cedula'],
            'nombre' => $data['nombre'],
            'observacion' => $data['observacion'],
            'activo' => $act,
        ));
    }

    public function mod_veh($data) {

        if (($data['activo']) == "")
            $act = 0;
        else
            $act = 1;

        $this->db->where('id', $data['id']);
        $this->db->update('almacenes_vehiculo', array(

            'placa' => $data['placa'],
            'placa_chuto' => $data['placa_chuto'],
            'placa_tanque' => $data['placa_tanque'],
            'modelo' => $data['modelo'],
            'marca' => $data['marca'],
            'anio' => $data['anio'],
            'observacion' => $data['observacion'],
            'activo' => $act,
        ));
    }

}
    
