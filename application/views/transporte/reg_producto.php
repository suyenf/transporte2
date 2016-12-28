<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Registro de productos</h1>
        <?php

            $nombre_producto = array('name' => 'nombre_producto', 'placeholder' => 'Nombre de producto');    
            $codigo_producto = array('name' => 'codigo_producto', 'placeholder' => 'Codigo de producto');
            $observacion = array('name' => 'observacion', 'placeholder' => 'Observacion de producto');
            $activo = array('name' => 'activo', 'checked' => TRUE);

            echo form_open('transporte/transporte/crear_producto'); /* Usar Form_open para abrir el controlador */
        ?>

        <?php echo form_label('Nombre del Producto', 'Nombre del Producto'); ?>
        <?php echo form_input($nombre_producto); ?><br>

        <?php echo form_label('Codigo de producto', 'Codigo de producto'); ?> 
        <?php echo form_input($codigo_producto); ?><br>

        <?php echo form_label('Observacion', 'Observacion'); ?>  
        <?php echo form_input($observacion); ?><br>

         <?php echo form_label('Activo', 'Activo'); ?>
         <?php echo form_checkbox($activo); ?><br>

        <?php echo form_submit('botonSubmit', 'Enviar'); echo form_close(); ?>

</html>
