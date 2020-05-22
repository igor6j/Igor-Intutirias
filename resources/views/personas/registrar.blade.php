<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR</title>
</head>
<body>
	<div align="center">
		<p>Registrar Persona</p>
		<form action="{{route('guardar_persona')}}"method="POST">
		@csrf
			<table border="1">
				<tr>
					<td><label>Profesion_id</label></td>
					<td><input type="text" name="txtProfesion_id" id="txtProfesion_id"></td>
				</tr>
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" name="txtNombre" id="txtNombre"></td>	
				</tr>
				<tr>
					<td><label>Primer_apellido</label></td>
					<td><input type="text" name="txtPrimer_apellido" id="txtPrimer_apellido"></td>	
				</tr>
				<tr>
					<td><label>Segundo_apellido</label></td>
					<td><input type="text" name="txtSegundo_apellido" id="txtSegundo_apellido"></td>	
				</tr>
				<tr>
					<td><label>Fecha_nacimiento</label></td>
					<td><input type="date" name="txtFecha_nacimiento" id="txtFecha_nacimiento"></td>	
				</tr>
				<tr>
					<td><label>Edad</label></td>
					<td><input type="int" name="txtEdad" id="txtEdad"></td>	
				</tr>
				<tr>
					<td><label>Estado</label></td>
					<td><input type="text" name="txt>Estado" id="txtEstado"></td>	
				</tr>
				

			</table>
			<tr>
					<td><input type="submit" name="registrar" value="registrar"></td>
			</tr>	
		</form>
		
	</div>

</body>
</html>