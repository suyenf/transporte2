<?php 
//        $placa = array('name' => 'placa','class' =>'form-control', 'placeholder' => 'Placa','required'=>'true');
//	$placa_chuto = array('name' => 'placa_chuto','class' =>'form-control', 'placeholder' => 'Placa Chuto','required'=>'true');
//	$placa_tanque = array('name' => 'placa_tanque','class' =>'form-control', 'placeholder' => 'Placa Tanque','required'=>'true');
//	
//	$modelo = array('name' => 'modelo','class' =>'form-control', 'placeholder' => 'Modelo','required'=>'true');
//	$marca = array('name' => 'marca','class' =>'form-control', 'placeholder' => 'Marca','required'=>'true');
//	$anio = array('name' => 'anio','class' =>'form-control', 'placeholder' => 'Año','required'=>'true');
//	
//	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de vehiculo','required'=>'true');
?>
<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Modificar Vehiculo</h1>
    </div>
</div>

<!-- Errores se formulario -->
<div style = "color: red;">
      <?php echo validation_errors(); ?>
</div>

<div class="row">
	<div class="col-xs-10">
            
		<form class="form-horizontal" action="<?php echo base_url("transporte/transporte/modificar_vehiculo/{$vehiculo}"); ?>" method="post" role="form">
                    <br><br><br>
			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Placa</strong></big> </label>
				<div class="col-sm-2">
					 <?php // echo form_input($placa);?>
                                <input type="text" class="form-control" name="placa" value="<?php echo $placa; ?>" disabled="disabled"/>        
                                <br>
				</div> 
<!--			</div>       
			 
			<div class="form-group">-->
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Placa Chuto</strong></big> </label>
				<div class="col-sm-2">
					<?php // echo form_input($placa_chuto);?>
                                <input type="text" class="form-control" name='placa_chuto'value="<?php echo "{$placa_chuto}"; ?>"/>    
                                <br>
				</div> 
<!--			</div>        
			
			<div class="form-group">-->
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1"><big><strong> Placa Tanque</strong></big> </label>
				<div class="col-sm-2">
					<?php // echo form_input($placa_tanque);?>
                                <input type="text" class="form-control" name='placa_tanque'value="<?php echo "{$placa_tanque}"; ?>"/>        
                                <br>
				</div> 
			</div>
			 
			<div class="form-group">
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Modelo</strong></big> </label>
				<div class="col-sm-2">
					<?php // echo form_input($modelo); ?>
                                <input type="text" class="form-control" name='modelo'value="<?php echo "{$modelo}"; ?>"/>            
                                <br>
				</div>
<!--			</div>
			
			<div class="form-group">-->
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Marca</strong></big> </label>
				<div class="col-sm-2">
					<?php // echo form_input($marca); ?>
                                <input type="text" class="form-control" name='marca'value="<?php echo "{$marca}"; ?>"/>            
                                <br>
                                </div>
<!--			</div>
			
			<div class="form-group">-->
				<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><big><strong> Año</strong></big> </label>
				<div class="col-sm-2">
					<?php // echo form_input($anio); ?>
                                <input type="text" class="form-control" name='anio'value="<?php echo "{$anio}"; ?>"/>                
                                <br>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Observacion</strong></big> </label>
				<div class="col-sm-9">
					<?php // echo form_textarea($observacion); ?>
                                <input type="text" class="form-control" name='observacion'value="<?php echo "{$observacion}"; ?>"/>                    
                                <br>
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
				<div class="col-md-offset-6 col-md-10">
                                     <div class="col-sm-6">
					<button class="btn btn-lg btn-success" onclick="miFuncion()" <?php echo form_submit('botonSubmit', 'Enviar');?>
						<i class="ace-icon fa fa-check bigger-130"></i>Guardar
					</button>
                                    </div>
                                </div>
			</div>
		<?php  echo form_close();?> 
                </form>
            <br><br><br>
	</div><!-- /.row -->
</div><!-- /.page-content -->

<script>
    function miFuncion() {
        alert("El Registro fue Modificado");
    }
</script>