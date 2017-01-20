<?php
	$nombre_producto = array('name' => 'nombre_producto','class' =>'form-control','placeholder' => 'Nombre del producto','required'=>'true');
	$codigo_producto = array('name' => 'codigo_producto','class' =>'form-control', 'placeholder' => 'Codigo de producto','required'=>'true');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de producto','required'=>'true');
	//$activo = array('name' => 'activo','class' =>'form-control', 'value' => '1', 'checked' => TRUE);
//	echo form_open('transporte/transporte/reg_producto'); /* Usar Form_open para abrir el controlador */
?>



<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Productos</h1>
    </div>
<!--</div>-->

<!-- Errores se formulario -->
<!--<div style = "color: red;">
      <?php // echo validation_errors(); ?>
</div>-->


<div class="row">
	<div class="col-xs-10">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_producto'); ?>" method="post">
                    <br><br><br>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Nombre del Producto</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_input($nombre_producto);?><br>
				</div> 
<!--			</div>
			 
			<div class="form-group">-->
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Código de Producto</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_input($codigo_producto); ?><br>
				</div>
			</div>
	
                        <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Observacion</strong></big> </label>
                        <div class="col-sm-9">
                            <?php echo form_textarea($observacion); ?>
                        </div>
                        </div>
                    
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Activo</strong></big> </label>
				<label>
					<input name="activo" class="ace ace-switch ace-switch-6" id="activo" value = '1' checked type="checkbox" />
					<span class="lbl"></span>
				</label>
			</div>
				  
			<div class="form-group">
				<div class="col-md-offset-6 col-md-10">
                                     <div class="col-sm-6">
					<button onclick="miFuncion()" class="btn btn-lg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar');?>
						<i class="ace-icon fa fa-check bigger-130"></i>Guardar
                                        </button> <br><br><br>
				</div>
				</div>
			</div>
		<?php echo form_close();?> 
                </form>
            
            
            
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>

                <strong>
                    <i class="ace-icon fa fa-check"></i>
                    Alerta!
                </strong>

                <?php echo validation_errors(); ?>
                <br />
            </div>
        </div><!-- /.row -->

        </div><!-- /-->
 </div><!-- /.page-content -->             

