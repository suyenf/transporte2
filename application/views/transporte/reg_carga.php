<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Orden de Carga</h1>
        
         <?php

        $carga_numero = array(
        'name' => 'id');
        
        $Fecha_carga = array(
        'name' => 'fecha',
        'placeholder' => 'Escribe la Fecha de Emisión');
                
        $correlativo = array(
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
        'name' => 'observacion');
        
        $estado = array(
        'name' => 'estado');
        
        $activo = array(
        'name' => 'activo');
        
        $chofer = array(
        'name' => 'chofer_id');
        
        $producto = array(
        'name' => 'producto_id');
        
        $vehiculo = array(
        'name' => 'vehiculo_id');
        
        $usuario = array(
        'name' => 'usuario_id');
        
        
        
        
      ?>
        
        
        <?php
      echo form_open('transporte/transporte/crear_comercio'); /* Usar Form_open para abrir el controlador */

        ?>
        <?php // echo form_label('Correlativo', 'producto_numero'); ?>        

        </br>
        <?php // echo form_input($producto_numero); ?>
        </br>
        <?php echo form_label('Nombre del Producto', 'fecha'); ?>
        </br>
        <?php echo form_input($Fecha_carga); ?>
        </br>
        <?php echo form_label('Correlativo', 'correlativo'); ?>
        </br>
        <?php echo form_input($correlativo); ?>
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
        <?php echo form_label('Proveedor', 'proveedor_id'); ?>
        </br>
        <?php echo form_input($proveedor); ?>
        </br>
        <?php echo form_label('Proveedor', 'proveedor_id'); ?>
        </br>
        <?php echo form_input($proveedor); ?>
        </br>
        <?php echo form_label('Proveedor', 'proveedor_id'); ?>
        </br>
        <?php echo form_input($proveedor); ?>
        </br>
        <?php echo form_label('Proveedor', 'proveedor_id'); ?>
        </br>
        <?php echo form_input($proveedor); ?>
        
</br>
        <?php echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
        ?>
</html>
