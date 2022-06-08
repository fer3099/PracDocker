<?php
	$sto="";
	if (is_numeric($_POST["num"]))
	{
		$num=$_POST["num"];
		for ($c=1; $c<=10; $c++)
			{
				if ($sto=="")
				{
					$r=$num*$c;
					$sto=$num.'x'.$c.'='.$r.'<br>';
				}
				else
				{
					$r=$num*$c;
					$sto=$sto.$num.'x'.$c.'='.$r.'<br>';
				}
			}
	}
	else
	{
		$sto="wow, esto no es un nùmero, que sorpresa, no? ♣_♣";
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/shit3.css"/>
		<script>
			function redi1()
			{
				location="pag2.php";
			}
			function redi()
			{
				location="pag5.php";
			}
		</script>
	</head>
	<body>
		<div class="contenedor">
			<h1>Multiplicar</h1>
			<form action="pag1.1.php" method="POST" class="formulario">
				<?php
					echo $sto
				?>
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