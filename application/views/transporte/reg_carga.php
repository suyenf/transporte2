<?php
	$origen_flete = array('name' => 'origen_flete','class' =>'form-control', 'placeholder' => 'Origen Flete');
	$destino_flete = array('name' => 'destino_flete','class' =>'form-control', 'placeholder' => 'Destino Flete');
	
	//Tipo solo numerico
	$monto = array('name' => 'monto_viatico','class' =>'form-control', 'placeholder' => 'Monto viatico');
	
	$uni = array('batea' => 'Batea', 'granel' => 'Granel', 'carga_suelta' => 'Carga Suelta');
	
	$modelo = array('name' => 'modelo','class' =>'form-control', 'placeholder' => 'Modelo');
	$marca = array('name' => 'marca','class' =>'form-control', 'placeholder' => 'Marca');
	$anio = array('name' => 'anio','class' =>'form-control', 'placeholder' => 'Año');
	
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Carga');
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
					<?php echo form_dropdown('unidad', $uni);?><br>
				</div> 
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Producto</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_dropdown('producto', $productos);?><br>
				</div> 
			</div>
			 
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Monto viatico</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($monto); ?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Cliente</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_dropdown('cliente', $clientes);?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Proveedor</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_dropdown('proveedor', $proveedores);?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Chofer</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_dropdown('chofer', $choferes);?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Vehiculo</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_dropdown('vehiculo', $vehiculos);?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Observacion</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_textarea($observacion); ?><br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Activo</strong></big> </label>
					<?php // echo form_label('Activo', 'Activo');?>                
				<label>
					<input name="activo" class="ace ace-switch ace-switch-6" id="activo" value = '1' checked type="checkbox" />
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