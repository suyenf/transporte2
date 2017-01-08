<?php
$nombre_producto = array('name' => 'nombre_producto','class' =>'form-control','placeholder' => 'Nombre del producto');
$codigo_producto = array('name' => 'codigo_producto','class' =>'form-control', 'placeholder' => 'Codigo de producto');
$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de producto');
$activo = array('name' => 'activo','class' =>'form-control', 'value' => '1', 'checked' => TRUE);
echo form_open('transporte/transporte/crear_producto'); /* Usar Form_open para abrir el controlador */
?>
<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Registro de Productos</h1>
    </div>
                
                <?php // echo form_label('Choferes: ');
//form_dropdown('choferes', $choferes); 
                ?><br>

                <?php // echo form_label('Nombre del Producto', 'Nombre del Producto');
//echo form_input($nombre_producto); 
                ?><br>
                <?php // echo form_label('Codigo de producto', 'Codigo de producto');
//echo form_input($codigo_producto); 
                ?><br>
                <?php // echo form_label('Observacion', 'Observacion');
//echo form_input($observacion); 
                ?><br>
                <?php // echo form_label('Activo', 'Activo');
//echo form_checkbox($activo); 
                ?><br>

<?php // echo form_submit('botonSubmit', 'Enviar');
//echo form_close(); 
?>

</div>
                <div class="row">
                    <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <form class="form-horizontal" action="<?php base_url('transporte/transporte/crear_producto'); ?>" method="post" role="form">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> Nombre del Producto</strong></big> </label>
                             <div class="col-sm-9">
                            <?php echo form_input($nombre_producto);?><br>
                            </div> 
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"><big><strong>  Código de Producto</strong></big> </label>
                        <div class="col-sm-9">
                            <?php echo form_input($codigo_producto); ?><br>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong>  Observacion</strong></big> </label>
                        <div class="col-sm-9">
                        <?php echo form_input($observacion); ?>
                     <br><br>

                        </div>
                    </div>
                    
                    <div class="col-xs-3">
                    </div>
                    <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"><big><strong>  Activo</strong></big> </label>
                    <?php // echo form_label('Activo', 'Activo');?>
                        
                        <label>
                            <input name="switch-field-1" class="ace ace-switch ace-switch-6" id="activo" type="checkbox" />
                            <span class="lbl"></span>
                        </label>
                   <?php // echo form_checkbox($activo);?><br>
                   <!--</div>-->
                    </div>
              
                    <div class="form-group">

                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-lg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar');
                                echo form_close();
                                        ?>
                                        <i class="ace-icon fa fa-check bigger-130"></i>
                                    Guardar
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                
                                <button class="btn btn-danger btn-xlg  " type="reset">
                                    <i class="ace-icon fa fa-undo bigger-130"></i>
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </form>
              </div><!-- /.row -->
              </div><!-- /.page-content -->
              

