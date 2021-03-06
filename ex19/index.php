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

		<p>Criar um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal principal</p>

		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>

		<br />

		<form id="formulario" action="/ex19/index.php" method="post">
			<div class="input-field">
				<label for="text">Números</label><br />
				<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Adicione 25 números aqui!" />
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar" />
		</form>

		<?php

		include_once 'db_connect.php';

		if (isset($_POST['value1'])) {

			$array = explode(" ", $_POST["value1"]);
    
            $numero = 5;

            $divisaoMatriz = array_chunk($array, $numero);

            $primeiro = $divisaoMatriz[0][0];
            $segundo = $divisaoMatriz[1][1];
            $terceiro = $divisaoMatriz[2][2];
            $quarto = $divisaoMatriz[3][3];
            $quinto = $divisaoMatriz[4][4];

			echo "<div class='results'>Números que estão na diagonal principal: <br/><div/>";

            echo "<div class='results'>$primeiro <br/><div/>";
            echo "<div class='results'>$segundo <br/><div/>";
            echo "<div class='results'>$terceiro <br/><div/>";
            echo "<div class='results'>$quarto <br/><div/>";
            echo "<div class='results'>$quinto <br/><div/>";

			$numerosInformados = mysqli_escape_string($connect, $_POST['value1']);

			$sql = "INSERT INTO Numeros (`numerosInformados`) VALUES ('$numerosInformados')";
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
					<th>Numeros Informados</th>
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
					<td><?= $dados['numerosInformados']; ?> </td>
				</tr>
			</tbody>
			<?php endwhile; ?>
		</table>

	</div>
</body>

</html>