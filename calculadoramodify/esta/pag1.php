<?php
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/shit3.css"/>
		<script>
//			function multi()
//			{
//				var sto="";
//				var n=document.getElementById('num1').value;
//				parseFloat(n);
//				if ((isNaN(n))||(n===""))
//				{
//					alert ("coloca un numero");
//				}
//				else
//				{
//					/*document.write("<link rel='stylesheet' type='text/css' href='css/shit3.css'/>");
//					document.write("<div class='contenedor'>");
//					document.write("<h1>Resultado</h1>");
//					document.write("<form class='formulario'>");
//					document.write("<ul>");*/
//					for (var c=1; c<=10; c++)
//						{
//							var r=n*c;
//							sto=sto+n+'x'+c+'='+r+"<br>";
//							document.getElementById("solo1").innerHTML=sto;
//						}
//					/*document.write("</ul>");
//					document.write("<input type='button' value='calculadora'onclick='redi()'class='button'/><input type='button' value='volver a multiplicar'onclick='recargar()' class='button'/></form></div>");
//*/				}
//			}
			function redi1()
			{
				location="pag2.php";
			}
			function redi()
			{
				location="pag5.php";
			}
//			function recargar()
//			{
//				location.reload();
//			}
		</script>
	</head>
	<body>
		<div class="contenedor">
			<h1>Multiplicar</h1>
			<form action="pag1.1.php" method="POST" class="formulario">
				<span id="solo1"></span>
				<label for="num1">
					<span>Numero a multiplicar:</span>
				</label>
				<input type="text"  name="num" id="num1"/>
				<input type="submit" value="multiplicar" class="button"/>
				<input type="button" value="calculadora" onclick="redi1()" class="button"/>
			</form>
		</div>
	</body>
</html>