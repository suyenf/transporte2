<?php
	$peso = array('name' => 'peso','class' =>'form-control', 'placeholder' => 'Peso','required'=>'true');
	$monto_peaje = array('name' => 'monto_peaje','class' =>'form-control', 'placeholder' => 'Monto Peaje','required'=>'true');
	$monto_caleta = array('name' => 'monto_caleta','class' =>'form-control', 'placeholder' => 'Monto Caleta','required'=>'true');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Carga','required'=>'true');
?>

<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Recepcion</h1>
    </div>
</div>

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-xs-10">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_recepcion'); ?>" method="post" role="form">
        	<br><br><br>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Peso</strong></big></label>
				<div class="col-sm-3"><?php echo form_input($peso);?></div>

				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Monto Peaje</strong></big> </label>
				<div class="col-sm-3"><?php echo form_input($monto_peaje);?></div> 
			</div>        

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Monto Caleta</strong></big> </label>
				<div class="col-sm-3"><?php echo form_input($monto_caleta);?></div> 

				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Correlativo</strong></big> </label>
				<div class="col-sm-3"><?php echo form_dropdown('correlativo', $cargas);?></div>
                        </div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Observacion</strong></big> </label>
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