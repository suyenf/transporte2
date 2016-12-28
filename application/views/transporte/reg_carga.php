<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Orden de Carga</h1>
        
         <?php

        $cod_carga = array(
        'name' => 'id');
        
        $fecha_carga = array(
        'name' => 'fecha',
        'placeholder' => 'Escribe la Fecha de Emisión');
                
        $correlativo_id = array(
        'name' => 'correlativo',
        'placeholder' => 'Indique Nro. de Correlativo');
        
        $proveedor = array(
        'name' => 'proveedor_id',
        'placeholder' => 'Indique nombre del Proveedor');
        
        $cliente = array(
        'name' => 'cliente_id',
        'placeholder' => 'Indique nombre del Cliente');
        
        $flete_o = array(
        'name' => 'origen_flete',
        'placeholder' => 'Indique el Flete de Origen');
        
        $flete_d = array(
        'name' => 'destino_flete',
        'placeholder' => 'Indique el Flete de detino');
        
        $unidad = array(
        'name' => 'unidad',
        'placeholder' => 'Indique la Unidad');
        
        $viatico = array(
        'name' => 'monto_viatico',
        'placeholder' => 'Indique Monto del Viatico');
        
        $observacion = array(
        'name' => 'observacion',
        'placeholder' => 'Indique Observación');

        $estado = array(
        'name' => 'estado');
        
        $activo = array(
        'name' => 'activo',
        'placeholder' => 'Indique Activo o no');

        $chofer = array(
        'name' => 'chofer_id',
        'placeholder' => 'Indique Chofer');

        $producto = array(
        'name' => 'producto_id',
        'placeholder' => 'Indique el Producto');

        $vehiculo = array(
        'name' => 'vehiculo_id',
        'placeholder' => 'Indique el Vehiculo');

        $usuario_id = array(
        'name' => 'usuario_id');
        
        
        
        
      ?>
        
        
        <?php
      echo form_open('transporte/transporte/crear_carga'); /* Usar Form_open para abrir el controlador */

        ?>
        <?php // echo form_label('Correlativo', 'producto_numero'); ?>        

        </br>
        <?php // echo form_input($producto_numero); ?>
        </br>
        <?php echo form_label('Nombre del Producto', 'fecha'); ?>
        </br>
        <?php echo form_input($fecha_carga); ?>
        </br>
        <?php echo form_label('Correlativo', 'correlativo'); ?>
        </br>
        <?php echo form_input($correlativo_id); ?>
        </br>
        <?php echo form_label('Proveedor', 'proveedor_id'); ?>
        </br>
        <?php echo form_input($proveedor); ?>
        </br>
        <?php echo form_label('Cliente', 'cliente_id'); ?>
        </br>
        <?php echo form_input($cliente); ?>
        </br>
        <?php echo form_label('Flete', 'origen_flete'); ?>
        </br>
        <?php echo form_input($flete_o); ?>
        </br>
        <?php echo form_label('Flete Destino', 'destino_flete'); ?>
        </br>
        <?php echo form_input($flete_d); ?>
        </br>
        <?php echo form_label('Proveedor', 'proveedor_id'); ?>
        </br>
        <?php echo form_input($proveedor); ?>
        </br>
        <?php echo form_label('Unidad', 'unidad'); ?>
        </br>
        <?php echo form_input($unidad); ?>
        </br>
        <?php echo form_label('Viatico', 'monto_viatico'); ?>
        </br>
        <?php echo form_input($viatico); ?>
        </br>
        <?php echo form_label('Observacion', 'observacion'); ?>
        </br>
        <?php echo form_input($observacion); ?>
        </br>
        <?php // echo form_label('Chofer', 'chofer_id'); ?>
        <div class="form-group">
            <label>Chofer</label>
            <select class="form-control" id="id" name="id_chofer" value="<?php echo set_value('cedula'); ?>" >
            </select>
        </div>
        
        </br>
        <?php // echo form_input($chofer); ?>
        </br>
        <?php echo form_label('Producto', 'producto_id'); ?>
        </br>
        <?php echo form_input($producto); ?>
        </br>
        <?php echo form_label('Vehiculo', 'vehiculo_id'); ?>
        </br>
        <?php echo form_input($vehiculo); ?>
        </br>
        <input type="checkbox" name="activo" value="3">Activo
        <?php form_input($activo); ?>
       
        
        
        
</br>
        <?php echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
        ?>
</html>
