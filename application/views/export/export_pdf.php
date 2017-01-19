<?php 
$this->pdf->selectFont(APPPATH.'/third_party/ezpdf/fonts/Helvetica-Oblique.afm'); // Tipo de letra

$pdf_info = array ('Title'=>$title,'Author'=>$author,'Subject'=>$subject,);
$this->pdf->addInfo($pdf_info);	

foreach ($content as $results) {
	$contenido[]=array
	(
		'Nombre'=>utf8_decode($results->nombre),
		'Codigo'=>$results->codigo,
		'Creado'=>$results->creado,
		'Observacion'=>$results->observacion
            
	);
	
}
$options = array(
              'shadeCol'=>array(0.8,0.8,0.8),             			     		  
              'width'=>400   //Ancho de la Tabla.
            );
$this->pdf->ezText($title."\n",10,array('justification'=>'center'));	
$this->pdf->ezTable($contenido);
$this->pdf->ezStream();