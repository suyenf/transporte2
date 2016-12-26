<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Registro de Mecanico</h1>
        
         <?php

        $cedula_mecanico = array(
        'name' => 'cedula',
        'placeholder' => 'Introduzca la cedula del Mecanico');
        
        $nombre_mecanico = array(
        'name' => 'nombre_m',
        'placeholder' => 'Introduzca el Nombre del Mecanico');
                
        $apellido_mecanico = array(
        'name' => 'apellido_m',
        'placeholder' => 'Introduzca Apellido del Mecanico');
        
        $direccion = array(
        'name' => 'direccion',
        'placeholder' => 'Introduzca Dirección');
       
        $cargo = array(
        'name' => 'id_cargo',
        'placeholder' => 'Introduzca Cargo');
       
        $estado_mecanico = array(
        'name' => 'id_em',
        'placeholder' => 'Introduzca Estado');
      ?>
        
        
        <?php
      echo form_open('transporte/transporte/crear_mecanico'); /* Usar Form_open para abrir el controlador */

        ?>
        <?php echo form_label('Cédula', 'cedula'); ?>        
        </br>
        <?php echo form_input($cedula_mecanico); ?>
        
        </br>
        <?php echo form_label('Nombre', 'nombre_m'); ?>
        </br>
        <?php echo form_input($nombre_mecanico); ?>
        
        </br>
        <?php echo form_label('Apellido', 'apellido_m'); ?>
        </br>
        <?php echo form_input($apellido_mecanico); ?>
        
        </br>
        <?php echo form_label('Dirección', 'direccion'); ?>
        </br>
        <?php echo form_input($direccion); ?>
        
        </br>
        <?php echo form_label('Cargo', 'id_cargo'); ?>
        </br>
        <?php echo form_input($cargo); ?>
        
        </br>
        <?php echo form_label('Estado', 'id_em'); ?>
        </br>
        <?php echo form_input($estado_mecanico); ?>
        
        </br>
        <?php echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
        ?>
</html>
