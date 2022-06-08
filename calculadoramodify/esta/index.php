<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/shit2.css"/>
		<title>Ingresar</title>
		<meta charset="UTF-8"/>
		<script>
			function entrar()
			{
				var a=document.getElementById('us').value;
				var b=document.getElementById('pass').value;
				if (a === "miremire" && b === "saludos")
				{
					location="pag1.php";
				}
				else
				{
					alert("tiene un error en alguno de los campos");
				}
			}
		</script>
	</head>
	<body>
		<div class="contenedor">
			<h1>Ingresar</h1>
			<form action="" method="" class="formulario">
				<label for="us">
					<span>Usuario:</span>
				</label>
					<input type="text" id="us" name="us"/>
				<label for="pass">
					<span>Contraseña:</span>
				</label>
					<input type="password" id="pass" name="pass"/>
					<input type="button" class="button" value="enter" onclick="entrar()"/>
			</form>
		</div>
	</body>
</html>