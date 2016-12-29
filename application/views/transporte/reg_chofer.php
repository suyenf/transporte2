        <h1>Registro de Chofer</h1>
        <?php
            $cedula = array('name' => 'cedula', 'placeholder' => 'Cedula de Chofer');    
            $nombre = array('name' => 'nombre', 'placeholder' => 'Nombre de Chofer');
            $observacion = array('name' => 'observacion', 'placeholder' => 'Observacion de Cliente');
            $activo = array('name' => 'activo', 'value' => '1', 'checked' => TRUE);
            echo form_open('transporte/transporte/crear_chofer'); /* Usar Form_open para abrir el controlador */
        ?>

        <?php echo form_label('Cedula', 'Cedula'); echo form_input($cedula); ?><br>
        <?php echo form_label('Nombre', 'Nombre'); echo form_input($nombre); ?><br>
        <?php echo form_label('Observacion', 'Observacion'); echo form_input($observacion); ?><br>
        <?php echo form_label('Activo', 'Activo'); echo form_checkbox($activo); ?><br>

        <?php echo form_submit('botonSubmit', 'Enviar'); echo form_close(); ?>
