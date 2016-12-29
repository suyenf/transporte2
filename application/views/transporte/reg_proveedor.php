        <h1>Registro de Proveedor</h1>
        <?php
            $rif_proveedor = array('name' => 'rif_proveedor', 'placeholder' => 'Rif Proveedor');    
            $razon_social = array('name' => 'razon_social', 'placeholder' => 'Razon Social');
            $observacion = array('name' => 'observacion', 'placeholder' => 'Observacion de Cliente');
            $activo = array('name' => 'activo', 'value' => '1', 'checked' => TRUE);
            echo form_open('transporte/transporte/crear_proveedor'); /* Usar Form_open para abrir el controlador */
        ?>

        <?php echo form_label('Rif del Proveedor', 'Rif del Proveedor'); echo form_input($rif_proveedor); ?><br>
        <?php echo form_label('Razon Social', 'Razon Social'); echo form_input($razon_social); ?><br>
        <?php echo form_label('Observacion', 'Observacion'); echo form_input($observacion); ?><br>
        <?php echo form_label('Activo', 'Activo'); echo form_checkbox($activo); ?><br>

        <?php echo form_submit('botonSubmit', 'Enviar'); echo form_close(); ?>
