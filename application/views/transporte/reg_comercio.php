<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Registro de Productos</h1>
        
         <?php

        $producto_numero = array(
        'name' => 'id_producto',
        'placeholder' => 'Escribe Codigo');
        
        $nombre_producto = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe el Nombre del Producto');
                
        $cant_producto = array(
        'name' => 'cantidad',
        'placeholder' => 'Indique la cantidad');
        
        $precio_producto = array(
        'name' => 'precio',
        'placeholder' => 'Introduzca el precio');
      ?>
        
        
        <?php
      echo form_open('transporte/transporte/crear_comercio'); /* Usar Form_open para abrir el controlador */

        ?>
        <?php // echo form_label('Correlativo', 'producto_numero'); ?>        

        </br>
        <?php // echo form_input($producto_numero); ?>
        </br>
        <?php echo form_label('Nombre del Producto', 'nombre'); ?>
        </br>
        <?php echo form_input($nombre_producto); ?>
        </br>
        <?php echo form_label('Cantidad', 'cantidad'); ?>
        </br>
        <?php echo form_input($cant_producto); ?>
        </br>
        <?php echo form_label('Precio del Producto', 'precio'); ?>
        </br>
        <?php echo form_input($precio_producto); ?>
        
</br>
        <?php echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
        ?>
</html>
