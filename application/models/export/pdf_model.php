<?php 

class Pdf_Model extends CI_Model {
	
  public function get_products(){
		 					 	
        $datos = array();
        $query = $this->db->get('almacenes_producto');

        if($query->num_rows() > 0){

            foreach ($query->result() as $fila){
                $datos[] = $fila;
            }
            $query->free_result();
            return $datos;
        }else
            return FALSE;
    }
	
      }	
  
//}