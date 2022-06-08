<?php
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/shit3.css"/>
		<title>Ingresar</title>
		<meta charset="UTF-8"/>
	</head>
	<body>
	<div class="contenedor">
		<h1>Ingresa tus datos:</h1>
		<form action="../bd/modificaciones.php" method="POST" class="formulario">
			<p>Solo puedes cambiar datos del tipo: B</p>
			<label for="id_usuario">
				<span>Usuario:</span>
			</label>
			<input type="text" name="txtus" id="id_usuario" required/>
			
			<label for="id_contraseña">
				<span>Nueva Contraseña:</span>
			</label>
			
			<input type="password" name="txtpas" id="id_contraseña" required/>
			
			<input type="hidden" name="txttipo" value="B"/>
			
			<input type="submit" class="button"/>
		</form>
	</div>
	</body>
</html>