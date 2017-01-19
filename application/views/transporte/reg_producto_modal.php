<?php
	$nombre_producto = array('name' => 'nombre_producto','class' =>'form-control','placeholder' => 'Nombre del producto','required'=>'true');
	$codigo_producto = array('name' => 'codigo_producto','class' =>'form-control', 'placeholder' => 'Codigo de producto','required'=>'true');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de producto','required'=>'true');
	//$activo = array('name' => 'activo','class' =>'form-control', 'value' => '1', 'checked' => TRUE);
//	echo form_open('transporte/transporte/reg_producto'); /* Usar Form_open para abrir el controlador */
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel">Nuevo Producto</h3>
            </div>
            <div class="modal-body">
                <?php
                echo form_open('transporte/Transporte/crear_producto');
                ?>
                <div class="row">
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1"><strong><small> Nombre del Producto</small></strong></label>
                    <div class="col-sm-4">
                        <?php echo form_input($nombre_producto); ?><br>
                    </div> 
  
                    <label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"><strong><small>Código de Producto</small></strong></label>
                    <div class="col-sm-4">
                        <?php echo form_input($codigo_producto); ?><br>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong> Observación</strong></big> </label>
                    <div class="col-sm-9">
                        <?php echo form_textarea($observacion); ?>
                    </div>
                </div>

                <br>
                <div class="form-group">
                    
                    <div class="col-md-offset-6 col-md-10">
     
                            <button onclick="miFuncion()" class="btn btn-xlg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar'); ?>
                                    <i class="ace-icon fa fa-check bigger-130"></i>Guardar
                            </button> 
                            <button onclick="miFuncion()" class="btn btn-xlg btn-warning" data-dismiss="modal">
                                <i class="ace-icon fa fa-ban bigger-130"></i>Cancelar
                            </button> 
                        </div>
                    </div>
                </div><br>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

