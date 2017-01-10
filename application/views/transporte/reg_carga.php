<?php
	$origen_flete = array('name' => 'origen_flete','class' =>'form-control', 'placeholder' => 'Origen Flete');
	$destino_flete = array('name' => 'destino_flete','class' =>'form-control', 'placeholder' => 'Destino Flete');
	
	$monto_viatico = array('name' => 'monto_viatico','class' =>'form-control', 'placeholder' => 'Monto viatico');
	
	$modelo = array('name' => 'modelo','class' =>'form-control', 'placeholder' => 'Modelo');
	$marca = array('name' => 'marca','class' =>'form-control', 'placeholder' => 'Marca');
	$anio = array('name' => 'anio','class' =>'form-control', 'placeholder' => 'Año');
	
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Proveedor');
?>
<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Carga</h1>
    </div>
</div>

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_carga'); ?>" method="post" role="form">
                    
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Origen Flete</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($origen_flete);?><br>
				</div> 
			</div>       
			 
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Destino Flete</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($destino_flete);?><br>
				</div> 
			</div>    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Unidad</strong></big> </label>
                        <div class="col-sm-9">
                        <select name="id_unidad" id="id_unidad">
                            <option>Batea</option>
                            <option selected="selected">Granel</option>
                            <option>Carga Suelta</option>
                        </select>
                         </div>
                    </div>
			<!--<br>Crear combo html con id unidad (normalito) con los datos de ,  y  </br>-->
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Monto Viatico</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($monto_viatico);?><br>
				</div> 
			</div>
			 
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Modelo</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($modelo); ?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Marca</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($marca); ?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Año</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($anio); ?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Observacion</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($observacion); ?><br><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Activo</strong></big> </label>
					<?php // echo form_label('Activo', 'Activo');?>                
				<label>
					<input name="switch-field-1" class="ace ace-switch ace-switch-6" id="activo" value = '1' checked type="checkbox" />
					<span class="lbl"></span>
				</label>
			</div>
				  
			<div class="form-group">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-lg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar');?>
						<i class="ace-icon fa fa-check bigger-130"></i>Guardar
					</button>
				</div>
			</div>
		<?php  echo form_close();?> 
	</div><!-- /.row -->
</div><!-- /.page-content -->
