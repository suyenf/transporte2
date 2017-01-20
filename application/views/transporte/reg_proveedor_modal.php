<?php
	$rif_proveedor = array('name' => 'rif_proveedor','class' =>'form-control', 'placeholder' => 'RIF Proveedor');
	$razon_social = array('name' => 'razon_social','class' =>'form-control', 'placeholder' => 'Razón Social del Proveedor');
	$observacion = array('name' => 'observacion','class' =>'form-control', 'placeholder' => 'Observacion de Proveedor');
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title" id="myModalLabel">Nuevo Proveedor</h3>
            </div>
            <div class="modal-body">
                <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"><big><strong> RIF.</strong></big> </label>
                        <div class="col-sm-3">
                            <?php echo form_input($rif_proveedor); ?><br>
                        </div> 
<!--                    </div>

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

                    <div class="form-group">
                        <div class="col-md-offset-6 col-md-10">
                            <div class="col-sm-6">
                                <button class="btn btn-lg btn-success"  <?php echo form_submit('botonSubmit', 'Enviar'); ?>
                                        <i class="ace-icon fa fa-check bigger-130"></i>Guardar
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

