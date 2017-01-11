<?php
	$rif_proveedor = array('name' => 'rif_proveedor','class' =>'form-control', 'placeholder' => 'RIF Proveedor');
	$razon_social = array('name' => 'razon_social','class' =>'form-control', 'placeholder' => 'Razon Social del Proveedor');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Proveedor');
?>
<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Proveedores</h1>
    </div>
</div>

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_proveedor'); ?>" method="post" role="form">
                    
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> RIF de Proveedor</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($rif_proveedor);?><br>
				</div> 
			</div>
			 
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Razon Social de Proveedor</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($razon_social); ?><br>
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