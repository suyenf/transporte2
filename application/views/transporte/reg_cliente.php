<?php
	$rif_cliente = array('name' => 'rif_cliente','class' =>'form-control', 'placeholder' => 'RIF Cliente','required'=>'true');
	$razon_social = array('name' => 'razon_social','class' =>'form-control', 'placeholder' => 'Razón Social del Cliente','required'=>'true');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Cliente','required'=>'true');
?>
<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Clientes</h1>
    </div>
<!--</div>-->

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-xs-10">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_cliente'); ?>" method="post" role="form">
                    <br><br><br>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> RIF.</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_input($rif_cliente);?><br>
				</div> 
<!--			</div>
			 
			<div class="form-group">-->
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Razón Social</strong></big> </label>
				<div class="col-sm-3">
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
                    
                    
                    <FORM>
                        <div class="form-group">
				<div class="col-md-offset-6 col-md-10">
                                     <div class="col-sm-6">
					<button class="btn btn-lg btn-success" <?php echo form_submit('botonSubmit', 'Enviar');?>
						<i class="ace-icon fa fa-check bigger-130"></i>Guardar
					</button>
                                     </div>
				</div>

			</div>
		<?php  echo form_close();?> 
                </form>
            <br><br><br>
        </div><!-- /.row -->
</div>        
</div><!-- /.page-content -->

