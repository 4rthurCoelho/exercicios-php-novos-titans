<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Exercicio-18</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/ex18/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>

		<h2>Exercício 18</h2>

		<br />

		<p>Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns aos e vetores</p>

		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>

		<br />

		<form id="formulario" action="/ex18/index.php" method="post">
			<div class="input-field">
				<label for="text">Primeiro Conjunto de Números</label><br />
				<input type="text" name="values1" id="values1" autocomplete="off" placeholder="Adicione 10 números aqui!" />
				<div class="underline"></div>
			</div>

			<div class="input-field">
				<label for="text">Segundo Conjunto de Números</label><br />
				<input type="text" name="values2" id="values2" autocomplete="off" placeholder="Adicione mais 10 números aqui!" />
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar" />
		</form>

		<?php

		include_once 'db_connect.php';

		$values1 = '';
		$values2 = '';
		$vetor1 = '';
		$vetor2 = '';
		$vetor3 = '';


		if (isset($_POST['values1']) && ($_POST['values2'])) {

			function forVetor()
			{

				$primeiroConjunto = explode(" ", $_POST["values1"]);
				$segundoConjunto = explode(" ", $_POST["values2"]);

				// Faz a comparação dos valores disponibilizados pelo usuário
				$primeiraDiferenca = array_diff($primeiroConjunto,$segundoConjunto);
				$segundaDiferença = array_diff($segundoConjunto,$primeiroConjunto);

				// Junta as duas arrays formadas em uma só
				$resultadosJuntos = array_merge($primeiraDiferenca, $segundaDiferença);
				
				// Converte as arrays em strings
				$stringConjunto1 = implode(" ", $primeiroConjunto);
				$stringConjunto2 = implode(" ", $segundoConjunto);
				$resultado = implode(" ", $resultadosJuntos);

				echo "<div class='results'>$resultado</div>";
			}

			print "<div class='results'><br> Os números não comuns do primeiro conjunto em relação ao segundo conjunto são: <br></div>";

			forVetor();

			$values1 = mysqli_escape_string($connect, $_POST['values1']);
			$values2 = mysqli_escape_string($connect, $_POST['values2']);

			$sql = "INSERT INTO Numeros (`conjunto1`, `conjunto2`) VALUES ('$values1', '$values2')";
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
					<th>Conjunto 1</th>
					<th>Conjunto 2</th>
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
						<td><?= $dados['conjunto1']; ?> </td>
						<td><?= $dados['conjunto2']; ?> </td>
					<?php endwhile; ?>
					</tr>
				</tbody>
		</table>

	</div>

</body>

</html>