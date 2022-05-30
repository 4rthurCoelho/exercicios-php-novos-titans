<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Exercicio-19</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/ex19/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

	<main class="container">

		<a href="../index.php" id="voltar">Voltar</a>

		<h2>Exercício 19</h2>

		<br />

		<p>Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números pare e média dos elementos do vetor.</p>

		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>

		<br />

		<form id="formulario" action="/ex19/index.php" method="post">
			<div class="input-field">
				<label for="text">Números</label><br />
				<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Coloque os números aqui!" />
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar" />
		</form>

		<?php
		if (isset($_POST['value1'])) {

			$numbers = $_POST['value1'];

			$vetor = explode(" ", $numbers);

			echo '<div class="matriz"><table border=1 rows=5 cols=5><tr>';
			for ($i = 0; $i < 25; $i++) {
				if ($i % 5 === 0) {
					echo '</tr><tr>';
				}
				echo "<td><div class='results'>$vetor[$i]</div></td>";
			}
			echo '</tr></table></div>';
		}
		?>
</body>

</html>