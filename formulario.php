<html>
	<head>
		<title>Formulario</title>
		<meta name= "viewport" content= "width = device-width, initial-escale=1.0">
		<meta http-equiv= "Content-Type" content= "text/html; charset=UTF-8" />
		<link rel= "stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel= "stylesheet" type="text/css" href="css/login.css">
	</head>
	<body>

	<form method="GET" name ="formulario" id = "formulario" action= "ingrear.php" >
		<label>Nombre:</label>
		<input type="text" name="Nombre" id = "Nombre" class="form-control" require="">
		</br>
		<label>Parcial:</label>
		<input type="text" name="Parcial" id="Parcial" class="form-control" require="">
		</br>
		<label>Final:</label>
		<input type="text" name="Final" id="Final" class="form-control" require="">
		</br>		
		<label>Mejoramiento:</label>
		<input type="text" name="Mejoramiento" id="Mejoramiento" class="form-control" require="">
		</br>
		<input type="submit" class="btn btn-success" value="Ingresar">
		<!--<a href= "crearDemo.php" class="btn btn-success" role = "button"> Conectarse </a>-->
	</form>

	</body>
</html>
