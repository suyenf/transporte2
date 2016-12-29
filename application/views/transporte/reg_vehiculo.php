        <h1>Registro de Vehiculo</h1>
        <?php
            $placa = array('name' => 'placa', 'placeholder' => 'Placa vehiculo');
            $placa_chuto = array('name' => 'placa_chuto', 'placeholder' => 'Placa Chuto vehiculo');
            $placa_tanque = array('name' => 'placa_tanque', 'placeholder' => 'Placa Tanque vehiculo');
            $marca = array('name' => 'marca', 'placeholder' => 'Marca Vehiculo');
            $modelo = array('name' => 'modelo', 'placeholder' => 'Modelo Vehiculo');
            $anio = array('name' => 'anio', 'placeholder' => 'Año Vehiculo');
            $observacion = array('name' => 'observacion', 'placeholder' => 'Observacion de Vehiculo');
            $activo = array('name' => 'activo', 'value' => '1', 'checked' => TRUE);
            echo form_open('transporte/transporte/crear_vehiculo'); /* Usar Form_open para abrir el controlador */
        ?>

        <?php echo form_label('placa_chuto', 'placa_chuto'); echo form_input($placa_chuto); ?><br>
        <?php echo form_label('Placa_tanque', 'Placa_tanque'); echo form_input($placa_tanque); ?><br>
        <?php echo form_label('Placa', 'Placa'); echo form_input($placa); ?><br>
        <?php echo form_label('Marca', 'Marca'); echo form_input($marca); ?><br>
        <?php echo form_label('Modelo', 'Modelo'); echo form_input($modelo); ?><br>
        <?php echo form_label('Año', 'Año'); echo form_input($anio); ?><br>
        <?php echo form_label('Observacion', 'Observacion'); echo form_input($observacion); ?><br>
        <?php echo form_label('Activo', 'Activo'); echo form_checkbox($activo); ?><br>

        <?php echo form_submit('botonSubmit', 'Enviar'); echo form_close(); ?>
