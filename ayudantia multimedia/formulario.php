<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fomulario kawaii</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
		
<div class="container">
	
	<div class="row">
		<div class="col-md-6 well">
			<form action="recibe.php" method="POST">
				<h3>Alumno</h3>
				Nombre: <input type="text" name="nombre"><br>
				Apellido: <input type="text" name="apellido"><br>
				Rut: <input type="text" name="rut"><br>
				Ramo: <input type="text" name="ramo"><br>
				Nota:<input type="text" name="nota"><br>	
			<input type="hidden" name="alumno_form">
			<input type="submit" name="Enviar" class="btn btn-success">
			</form>
		</div>

		<div class="col-md-6 well">
			<form action="recibe.php" method="POST">
				<h3>Ramo</h3>
				Ramo: <input type="text" name="ramo"><br>
				Nota:<input type="text" name="nota"><br>
				<input type="hidden" name="notas">
			<input type="submit" name="Enviar" class="btn btn-danger">
		</form>
		</div>
	</div>
</div>


		
	

			<script src="js/bootstrap.js"></script>

</body>
</html>