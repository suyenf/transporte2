<?php
	$nombre_producto = array('name' => 'nombre_producto','class' =>'form-control','placeholder' => 'Nombre del producto');
	$codigo_producto = array('name' => 'codigo_producto','class' =>'form-control', 'placeholder' => 'Codigo de producto');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de producto');
?>
<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Productos</h1>
    </div>
</div>

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-xs-12">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_producto'); ?>" method="post" role="form">
                    
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Nombre del Producto</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($nombre_producto);?><br>
				</div> 
			</div>
			 
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Código de Producto</strong></big> </label>
				<div class="col-sm-9">
					<?php echo form_input($codigo_producto); ?><br>
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
              

