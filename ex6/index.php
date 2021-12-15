<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-06</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<main class= "container">
   
	<h2>Exercício 6</h2>

    <p><br /> Entre com um número inteiro entre 1 e 12 e o algoritimo vai mostrar um mês correspondente ao número :)<br /></p>

    <br />

	<form id="formulario" action="/ex6/index.php" method="post">
		<div class="input-field">
			<label for="number">Número</label><br />
			<input type="number" name="value1" value="<?= $num1 ?>" id="valor1" autocomplete="off" placeholder="Adicione um numero!"/>
			<div class="underline"></div>
  		</div>
			 <input type="submit" name="enviar" value="Enviar" class="enviar"/>	
    </form>

	<?php

		$mes = '';

		if(isset($_POST['value1'])) {

			$mes = $_POST['value1'];

			switch ($mes) {
				case 1:
					print "<div class='results'>Janeiro<div>";
					break;
				case 2:
					print "<div class='results'>Fevereiro<div>";
					break;
				case 3:
					print "<div class='results'>Março<div>";
					break;
				case 4:
					print "<div class='results'>Abril<div>";
					break;
				case 5:
					print "<div class='results'>Maio<div>";
					break;
				case 6:
					print "<div class='results'>Junho<div>";
					break;
				case 7:
					print "<div class='results'>Julho<div>";
					break;
				case 8:
					print "<div class='results'>Agosto<div>";
					break;
				case 9:
					print "<div class='results'>Setembro<div>";
					break;
				case 10:
					print "<div class='results'>Outubro<div>";
					break;
				case 11:
					print "<div class='results'>Novembro<div>";
					break;
				case 12:
					print "<div class='results'>Dezembro<div>";
					break;
				default:
					echo "<div class='results'>Por favor coloque um número de 1 a 12!<div>";
					break;
			}
		}
?>

</main>

</body>
</html>