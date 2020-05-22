<!DOCTYPE html>
<html>
<head>
	<title>Editar Persona</title>
</head>
<body>
	<div align="center">
		<p>Editar Persona</p>
		<form action="{{route('modificar_persona',$id)}}" method="POST">
		@csrf
		@Method('PUT')
			<table border="1">
				<tr>
					<td><label>Profesion_id</label></td>
					<td><input type="text" name="txtProfesion_id" id="txtProfesion_id" value="uno"></td>
				</tr>
				<tr>
					<td><label>Nombre</label></td>
					<td><input type="text" name="txtNombre" id="txtNombre" value="dos"></td>	
				</tr>
				<tr>
					<td><label>Primer_apellido</label></td>
					<td><input type="text" name="txtPrimer_apellido" id="txtPrimer_apellido" value="tres"></td>	
				</tr>
				<tr>
					<td><label>Segundo_apellido</label></td>
					<td><input type="text" name="txtSegundo_apellido" id="txtSegundo_apellido" value="cuatro"></td>	
				</tr>
				<tr>
					<td><label>Fecha_nacimiento</label></td>
					<td><input type="date" name="txtFecha_nacimiento" id="txtFecha_nacimiento" value="15/05/1960"></td>	
				</tr>
				<tr>
					<td><label>Edad</label></td>
					<td><input type="int" name="txtEdad" id="txtEdad" value="60"></td>	
				</tr>
				<tr>
					<td><label>Estado</label></td>
					<td><input type="text" name="txt>Estado" id="txtEstado" value="casado"></td>	
				</tr>
				

			</table>
			<tr>
					<td colspan="2" align="center"><input type="submit" name="modificar" value="modificar"></td>
			</tr>	
		</form>
		
	</div>
</body>
</html>>
