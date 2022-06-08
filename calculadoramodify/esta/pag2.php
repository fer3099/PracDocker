<?php
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/shit1.css"/>
		<script src="javascript/calculadora.js"></script>
	</head>
	<body>
		<div class="contenedor">
			<form class="formulario">
					<label><span id="texto">0.</span>
					</label>
					<input type="button" value="7" onclick="num7()"/>
					<input type="button" value="8" onclick="num8()"/>
					<input type="button" value="9" onclick="num9()"/>
					<input type="button" value="/" onclick="divi()"/>
					<input type="button" value="4" onclick="num4()"/>
					<input type="button" value="5" onclick="num5()"/>
					<input type="button" value="6" onclick="num6()"/>
					<input type="button" value="x" onclick="multi()"/>
					<input type="button" value="1" onclick="num1()"/>
					<input type="button" value="2" onclick="num2()"/>
					<input type="button" value="3" onclick="num3()"/>
					<input type="button" value="+" onclick="suma()"/>
					<input type="button" value="." onclick="punto()"/>
					<input type="button" value="0" onclick="num0()"/>
					<input type="button" value="=" onclick="resultado()"/>
					<input type="button" value="-" onclick="resta()"/>
					<input type="button" value="reset" onclick="otra()"/>
			</form>
		</div>
	</body>
</html>