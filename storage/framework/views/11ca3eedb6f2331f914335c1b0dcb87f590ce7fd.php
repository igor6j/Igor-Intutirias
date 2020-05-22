<!DOCTYPE html>
<html>
<head>
	<title>PERSONAS</title>
</head>
<body>
<div align="center">
	<P>LISTA PERSONAS VISTA</P>
	<form action=>
</div>
	<table border="1" align="center">
		<th>id</th>
		<th>Profesion_id</th>
		<th>Nombre</th>
		<th>Primer_apellido</th>
		<th>Segundo_apellido</th>
		<th>Fecha_nacimiento</th>
		<th>Edad</th>
		<th>Estado</th>	
	<body>
	<tr>
		<td>1</td>
		<td>Medico</td>
		<td>Laura</td>
		<td>Lara</td>
		<td>Aguirre</td>
		<td>15/07/1960</td>
		<td>60</td>
		<td>Casada</td>
		<td><a href="<?php echo e(route('editar_persona',1)); ?>">Editar</a>
			<form action="<?php echo e(route('eliminar_persona',1)); ?>" method="post">
				<?php echo csrf_field(); ?>
				<?php echo method_field('DELETE'); ?>
				<input type="submit" name="Eliminar" value="Eliminar">
			</form>
		</td>
		
	</tr>
	</body>
	</table>
	</form>
		<div align="center">
			<a href="<?php echo e(route('registrar_persona')); ?>">Nueva persona</a>
		</div>
		
</body>
</html><?php /**PATH C:\xampp\htdocs\cursolaravel\resources\views/personas/listar.blade.php ENDPATH**/ ?>