<?php
	include_once('class/calculadora.class.php');

	$calcula = new Calculadora();
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Página Inicial</title>
			<link rel="stylesheet" type="text/css" href="css/csscalc.css">
		</head>
		<body>
			<!-- Corpo da Calculadora -->
			<div class="calculadora"><br><br>
				<h2>Calculadora Bacana</h2>
				
				<form class="formCalculo" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					
						<input type="number" placeholder="Ex: 5" name="n1" id="dados" required>
						<input type="number" placeholder="Ex: 2" name="n2" id="dados"  required><br><br>
						<input type="submit" name="soma" value="Somar" id="env">
						<input type="submit" name="sub" value="Subtrair" id="env">
						<input type="submit" name="mult" value="Multiplicar" id="env">
						<input type="submit" name="div" value="Dividir" id="env">
						<br><br>
					
				</form>
			<div>
			<?php
				if(isset($_POST['soma'])){
					$n1 = $_POST['n1'];
					$n2 = $_POST['n2'];

					$calcula->soma($n1, $n2);
				}elseif(isset($_POST['sub'])){
					$n1 = $_POST['n1'];
					$n2 = $_POST['n2'];

					$calcula->subtracao($n1, $n2);
				}elseif(isset($_POST['mult'])){
					$n1 = $_POST['n1'];
					$n2 = $_POST['n2'];

					$calcula->multiplicacao($n1, $n2);
				}elseif(isset($_POST['div'])){
					$n1 = $_POST['n1'];
					$n2 = $_POST['n2'];

					$calcula->divisao($n1, $n2);
				}else{
					echo '<h4>Insira os dados</h4><br><br>';
				}
			?>
		</body>
	</html>