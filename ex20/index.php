<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Exercicio-20</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/ex20/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

	<main class="container">

		<a href="../index.php" id="voltar">Voltar</a>

		<h2>Exercício 20</h2>

		<br />

		<p>Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares</p>

		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>

		<br />

		<form id="formulario" action="/ex20/index.php" method="post">
			<div class="input-field">
				<label for="text">Números</label><br />
				<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Coloque os números aqui!" />
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar" />
		</form>

		<?php

		include_once 'functions.php';

		include_once 'db_connect.php';

		if (isset($_POST['value1'])) {

			$numbers = $_POST['value1'];

			$vetor = explode(" ", $numbers);

			foreach ($vetor as $numero) {
				$numero % 2 == 0 ? $par[] = $numero : $impar[] = $numero;
			}

			echo "<div class='results'>Matriz:</div>";

			matNumeros($vetor);

			echo "<div class='results'>Matriz somente com números impares:</div>";

			matImparPar($impar, $impar);

			echo "<div class='results'>Matriz somente com números pares:</div>";

			matImparPar($par, $par);

			$stringImpar = implode(" ", $impar);
			$stringPar = implode(" ", $par);

			$numbers = mysqli_escape_string($connect, $_POST["value1"]);
			$impar = mysqli_escape_string($connect, $stringImpar);
			$par = mysqli_escape_string($connect, $stringPar);

			$sql = "INSERT INTO Numeros (`numeros`, `impares`, `pares`) VALUES ('$numbers', '$stringImpar', '$stringPar')";
			mysqli_query($connect, $sql);
		}
		?>

	</main>

	<div class="container">
		<h2 class="titulo-listagem">Listagem de Dados Salvos</h2>

		<table class="content-table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Numeros</th>
					<th>Impares</th>
					<th>Pares</th>
				</tr>
			</thead>
			<?php
			$sql = "SELECT * FROM Numeros";
			$resultado = mysqli_query($connect, $sql);
			while ($dados = mysqli_fetch_array($resultado)) :
			?>
			<tbody>
				<tr>
					<td><?= $dados['id']; ?> </td>
					<td><?= $dados['numeros']; ?> </td>
					<td><?= $dados['impares']; ?> </td>
					<td><?= $dados['pares']; ?> </td>
				</tr>
			</tbody>
			<?php endwhile; ?>
		</table>

	</div>

</body>

</html>