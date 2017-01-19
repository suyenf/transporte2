<?php

class Pdf_Controller extends CI_Controller {

	function __construct() { 
		parent::__Construct();
		
//		$this->load->helper(array('html','url'));
//		$this->load->library(array('table','pdf'));
//		$this->load->database();
		$this ->load->model('export/Pdf_Model'); 
       }
	
	public function index(){	
	      	
		$data['title']='Uso de Ezpdf con CodeIgniter'; 
		$data['content']= $this->Pdf_Model->get_products(); 
			
		$this->load->view('export/pdf_view',$data);
		
	
	       }
	
	public function export(){	
		      	
//		$data['title']='Uso de Ezpdf con CodeIgniter'; 
		$data['author']='Admin';
		$data['subject']='Listado de Productos'; 
		 
		$data['almacenes_producto']= $this->Pdf_Model->get_products(); 
			
		$this->load->view('export/export_pdf',$data);
	
		       }	

   } 