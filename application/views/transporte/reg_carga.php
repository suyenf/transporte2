<?php
	$origen_flete = array('name' => 'origen_flete','class' =>'form-control', 'placeholder' => 'Origen Flete','required'=>'true');
	$destino_flete = array('name' => 'destino_flete','class' =>'form-control', 'placeholder' => 'Destino Flete','required'=>'true');
	
	//Tipo solo numerico
	$monto = array('name' => 'monto_viatico','class' =>'form-control', 'placeholder' => 'Monto viatico','required'=>'true');
	
	$uni = array('batea' => 'Batea', 'granel' => 'Granel', 'carga_suelta' => 'Carga Suelta','required'=>'true');
	
	$modelo = array('name' => 'modelo','class' =>'form-control', 'placeholder' => 'Modelo','required'=>'true');
	$marca = array('name' => 'marca','class' =>'form-control', 'placeholder' => 'Marca','required'=>'true');
	$anio = array('name' => 'anio','class' =>'form-control', 'placeholder' => 'Año','required'=>'true');
	
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Carga','required'=>'true');
?>
<?php
	$nombre_producto = array('name' => 'nombre_producto','class' =>'form-control','placeholder' => 'Nombre del producto','required'=>'true');
	$codigo_producto = array('name' => 'codigo_producto','class' =>'form-control', 'placeholder' => 'Codigo de producto','required'=>'true');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de producto','required'=>'true');
	//$activo = array('name' => 'activo','class' =>'form-control', 'value' => '1', 'checked' => TRUE);
//	echo form_open('transporte/transporte/reg_producto'); /* Usar Form_open para abrir el controlador */
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
	<div class="col-xs-10">
		<form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_carga'); ?>" method="post" role="form">
                    <br><br><br>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Origen Flete</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_input($origen_flete);?>
				</div> 
<!--			</div>       
			 
			<div class="form-group">-->
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Destino Flete</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_input($destino_flete);?>
				</div> 
			</div>        

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Unidad</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_dropdown('unidad', $uni);?>
				</div> 
<!--			</div>

			<div class="form-group">-->
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Producto</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_dropdown('producto', $productos);?>
                                    <!--<button class="glyphicon glyphicon-plus btn-minier help-button btn-yellow"></button>-->
                                    <button class="glyphicon glyphicon-plus btn-minier help-button btn-yellow" data-toggle="modal" data-target="#myModal">
                                        <!--<span class="fa fa-plus-circle"></span> Nuevo Detalle-->
                                    </button>

				</div> 

                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h3 class="modal-title" id="myModalLabel">Nuevo Producto</h3>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                echo form_open('index.php/transporte/Transporte/crear_producto');
                                                ?>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Nombre del Producto</strong></big> </label>
                                                    <div class="col-sm-3">
                                                        <?php echo form_input($nombre_producto); ?><br>
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
                                                    <?php // echo form_label('Activo', 'Activo');?>                
                                                    <label>
                                                        <input name="switch-field-1" class="ace ace-switch ace-switch-6" id="activo" value = '1' checked type="checkbox" />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-offset-6 col-md-10">
                                                        <div class="col-sm-6">
                                                            <button onclick="miFuncion()" class="btn btn-lg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar'); ?>
                                                                    <i class="ace-icon fa fa-check bigger-130"></i>Guardar
                                                            </button> <br><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php echo form_close(); ?>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                
                                
                                
                                
                                
			</div>
			 
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Viatico</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_input($monto); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Cliente</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_dropdown('cliente', $clientes);?>
				</div>
<!--			</div>
			
			<div class="form-group">-->
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Proveedor</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_dropdown('proveedor', $proveedores);?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Chofer</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_dropdown('chofer', $choferes);?>
				</div>
<!--			</div>
			
			<div class="form-group">-->
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong> Vehiculo</strong></big> </label>
				<div class="col-sm-3">
					<?php echo form_dropdown('vehiculo', $vehiculos);?>
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
					<?php // echo form_label('Activo', 'Activo');?>                
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
			</div>
                    <br><br><br>
		<?php  echo form_close();?> 
                </form>        
	</div><!-- /.row -->
</div><!-- /.page-content -->