
<a href = "#"
	<button class="btn btn-lg btn-success">
		<i class="ace-icon fa fa-check"></i>Agregar producto
	</button>
</a>

<div class="col-sm-12">
    <div class="widget-header">
        <h1 class="widget-title">Productos</h1>
    </div>
</div>

<table class = "table table-hover table-condensed">
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Codigo</th>
					<th>Creado</th>
					<th>Observacion</th>
					<th>Activo</th>
				</tr>
				<?php if(isset($productos)){ ?>
				<?php 
					$i = 0;
					foreach ($productos as $row){ 

					//Campo activo
					if($row->activo)
						$act = "SI";
					else
						$act = "NO";
				?>
					<?php print "<tr>
					<td>".++$i."</td>
					<td><a href='".base_url()."modificar_producto/".$row->id."'>".$row->nombre."</a></td>
					<td>".$row->codigo."</td>
					<td>".$row->creado."</td>
					<td>".$row->observacion."</td>
					<td>".$act."</td>
					</tr>" ?> 
				<?php }}else{ print "No hay datos que mostrar<br><br>";  } ?>
			</table>


			