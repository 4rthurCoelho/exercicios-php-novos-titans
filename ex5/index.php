
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-05</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<main class= "container">
   
	<h2>Exercício 5</h2>

    <p><br />Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados<br /></p>

    <br />

	<form id="formulario" action="index.php" method="post">
		<div class="input-field">
			<label for="number">Lado AB</label><br />
			<input type="number" name="value1" value="<?= $AB ?>" id="valor1" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
		
		<div class="input-field">
			<label for="number">Lado BC</label><br />
			<input type="number" name="value2" value="<?= $BC ?>" id="valor2" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
		
		<div class="input-field"><br />
			<label for="number">Lado AC</label><br />
			<input type="number" name="value3" value="<?= $AC ?>" id="valor3" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
		
		  <input type="submit" name="enviar" value="Enviar" class="enviar"/>	

	
		
    </form>

	<?php

		$AB = '';
		$BC = '';
		$AC = '';	

		if(isset($_POST['value1']) && ($_POST['value2']) && ($_POST['value3'])) {

			$AB = $_POST['value1'];
			$BC = $_POST['value2'];
			$AC = $_POST['value3'];
		
			if ($AB==$BC && $BC==$AC) 
				echo "<div class='results'>Com estes valores temos um Triangulo Equilatero :)</div>";
			
			elseif ($AB!=$AC && $AB!=$BC && $BC!=$AC)
				echo "<div class='results'>Com estes valores temos um Triangulo Escaleno :)</div>";
			
			else
				echo "<div class='results'>Com estes valores temos um Triangulo Isosceles :)</div>";
	}

?>

</main>

</body>
</html>