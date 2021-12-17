<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-04</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/ex4/style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<main class= "container">
 
<a href="../index.php" id="voltar">Voltar</a>    
  
	<h2>Exercício 4</h2>

    <p><br />Entrar com 3 números e o algoritimo ira imprimi-los em ordem decrescente (suponha números diferentes) :)<br /></p>

    <br />

	<form id="formulario" action="/ex4/index.php" method="post">
		<div class="input-field">
			<label for="number">Número 1</label><br />
			<input type="number" name="value1" value="<?= $num1 ?>" id="valor1" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
		
		<div class="input-field">
			<label for="number">Número 2</label><br />
			<input type="number" name="value2" value="<?= $num2 ?>" id="valor2" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
		
		<div class="input-field"><br />
			<label for="number">Número 3</label><br />
			<input type="number" name="value3" value="<?= $num3 ?>" id="valor3" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
		
		  <input type="submit" name="enviar" value="Enviar" class="enviar"/>	

	
		
    </form>

	<?php

		$num1 = '';
		$num2 = '';
		$num3 = '';	

		if(isset($_POST['value1']) && ($_POST['value2']) && ($_POST['value3'])) {

		$num1 = $_POST['value1'];
		$num2 = $_POST['value2'];
		$num3 = $_POST['value3'];

		if	   ($num1 > $num2 && $num2 > $num3) echo "<div class='results'>$num1 $num2 $num3</div>";
		elseif ($num3 > $num2 && $num2 > $num1) echo "<div class='results'>$num3 $num2 $num1</div>";
		elseif ($num2 > $num1 && $num1 > $num3) echo "<div class='results'>$num2 $num1 $num3</div>";
		elseif ($num2 > $num1 && $num1 < $num3) echo "<div class='results'>$num2 $num3 $num1</div>";
		elseif ($num1 > $num3 && $num3 > $num2) echo "<div class='results'>$num1 $num3 $num2</div>";
		elseif ($num3 > $num1 && $num1 > $num2) echo "<div class='results'>$num3 $num1 $num2</div>";
		elseif ($num3 > $num1 && $num1 > $num2) echo "<div class='results'>$num3 $num1 $num2</div>";
		elseif ($num1 = $num2 && $num2 > $num3) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";
		elseif ($num3 = $num2 && $num2 > $num1) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";
		elseif ($num2 = $num1 && $num1 > $num3) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";
		elseif ($num2 = $num1 && $num1 < $num3) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";
		elseif ($num1 = $num3 && $num3 > $num2) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";
		elseif ($num3 = $num1 && $num1 > $num2) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";
		elseif ($num3 = $num1 && $num1 > $num2) echo "<div class='results'>Dois valores iguais não são aceitos :(</div>";

	}

?>

</main>

</body>
</html>
