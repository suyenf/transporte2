<?php
	foreach ($productos as $row){	
		$nombre_producto = array('value' => $row->nombre, 'name' => 'nombre_producto','class' =>'form-control','placeholder' => 'Nombre del producto','required'=>'true');
		$codigo_producto = array('value' => $row->codigo,'name' => 'codigo_producto','class' =>'form-control', 'placeholder' => 'Codigo de producto','required'=>'true');
		$observacion = array('value' => $row->observacion, 'name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de producto','required'=>'true');
	}
?>



<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Editar Productos</h1>
    </div>
<!--</div>-->

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>


<div class="row">
	<div class="col-xs-10">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/modificar_producto'); ?>" method="post">
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
					<input name="activo" class="ace ace-switch ace-switch-6" id="activo" 
					<?php foreach ($productos as $row){
							if($row->activo) 
								print "value = '1' checked "; 
							else 
								print "value = '0' ";
							}?>					
					type="checkbox" />
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
        </div><!-- /.row -->

        </div><!-- /-->
 </div><!-- /.page-content -->             

