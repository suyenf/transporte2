<?php
	$origen_flete = array('name' => 'origen_flete','class' =>'form-control');
	$destino_flete = array('name' => 'destino_flete','class' =>'form-control');
	
	$monto = array('name' => 'monto_viatico','class' =>'form-control', 'placeholder' => 'Monto viatico');
	$peso = array('name' => 'peso','class' =>'form-control', 'placeholder' => 'Peso de carga');
	$pesot = array('name' => 'pesot','class' =>'form-control', 'placeholder' => 'Peso de tara');
	$uni = array('batea' => 'Batea', 'granel' => 'Granel', 'carga_s' => 'Carga Suelta');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Carga');
?>

<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Orden de Carga</h1>
    </div>
</div>

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-sm-12">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_carga'); ?>" method="post" role="form">
        	
			<div class="form-group">
				<label class="col-sm-8 control-label no-padding-right" for="form-field-1"><big><strong>Correlativo</strong></big></label>
				<div class="col-sm-3"><?php echo form_input($destino_flete);?></div>
			</div>   
                    
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Proveedor</strong></big> </label>
                        <div class="col-sm-3"><?php echo form_dropdown('proveedor', $proveedores); ?></div><br><br><br>
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Cliente</strong></big> </label>
                        <div class="col-sm-1"><?php echo form_dropdown('cliente', $clientes); ?></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Origen</strong></big></label>
                        <div class="col-sm-3"><?php echo form_input($origen_flete); ?></div>

                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Destino</strong></big> </label>
                        <div class="col-sm-3"><?php echo form_input($destino_flete); ?></div> 
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Producto</strong></big> </label>
                            <div class="col-sm-1"><?php echo form_dropdown('producto', $productos); ?></div> 
				

                        
			</div>
			<div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Bl</strong></big> </label>
                            <div class="col-sm-2"><?php echo form_input($origen_flete);?></div> 
			</div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Afiliado</strong></big></label>
                            <div class="col-sm-6"><?php echo form_input($origen_flete); ?></div>
			</div> 
                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong>Placa Chuto</strong></big> </label>
                            <div class="col-sm-3"><?php echo form_dropdown('proveedor', $proveedores); ?></div>
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong>Placa Tanque</strong></big> </label>
                            <div class="col-sm-3"><?php echo form_dropdown('producto', $productos); ?></div> 
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Chofer</strong></big> </label>
                        <div class="col-sm-4"><?php echo form_dropdown('chofer', $choferes); ?></div>

                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Placa del Vehiculo</strong></big> </label>
                        <div class="col-sm-3"><?php echo form_dropdown('vehiculo', $vehiculos); ?></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong>Sitio de Carga</strong></big> </label>
                        <div class="col-sm-4"><?php echo form_dropdown('unidad', $uni); ?></div> 
                        <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong>Buque</strong></big> </label>
                        <div class="col-sm-3"><?php echo form_dropdown('unidad', $uni); ?></div> 
                    </div>
                
			<!--<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Peso Tara</strong></big> </label>
				<div class="col-sm-3"><?php echo form_input($pesot); ?></div>

				<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Peso</strong></big> </label>
				<div class="col-sm-3"><?php echo form_input($peso); ?></div>
			</div>-->
			
            <div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Ruta</strong></big> </label>
				<div class="col-sm-3"><?php echo form_input($monto); ?></div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-2"><big><strong> Observacion</strong></big> </label>
				<div class="col-sm-9"><?php echo form_textarea($observacion); ?></div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Activo</strong></big> </label>        
                <div class="col-sm-9">
                    <label>
                        <input name="activo" class="ace ace-switch ace-switch-6" id="activo" value = '1' checked type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </div>
			</div>
				  
			<div class="form-group">
				<div class="col-md-offset-6 col-md-10">
                	<div class="col-sm-6">
						<button class="btn btn-lg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar');?>
							<i class="ace-icon fa fa-check bigger-110"></i>Guardar
						</button>
					</div>
				</div>
			</div><br><br><br>

		<?php  echo form_close();?>  
	</div><!-- /.row -->
</div><!-- /.page-content -->
</div>