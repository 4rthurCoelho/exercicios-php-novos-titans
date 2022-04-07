<?php
//conexão

?>
<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Exercicio-14</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/ex14/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
		<h2>Exercício 14</h2>
		
		<br />

		<p>Construir um algoritmos que calcule e imprima quantos anos serão necessários para que a pessoa 1 (mais baixa) seja maior que a pessoa 2 (mais alta)!</p>

		<br />

		<p>ATENÇÃO: Digite os valores em centimetros(cm) :)</p>

		<br />

		<form id="formulario" action="/ex14/index.php" method="post">
			<div class="input-field">
				<label for="text">Altura da pessoa 1</label><br />
				<input type="text" name="altura1" id="altura1" autocomplete="off" size="40" placeholder="Digite a altura em centimetros aqui!"/>
				<div class="underline"></div>


				<label for="text">Crescimento anual da pessoa 1</label><br />
				<input type="text" name="crescimento1" id="crescimento1" autocomplete="off" size="40" placeholder="Digite o crescimento em centimetros aqui!"/>
				<div class="underline"></div>


				<label for="text">Altura da pessoa 2</label><br />
				<input type="text" name="altura2" id="altura2" autocomplete="off" size="40" placeholder="Digite a altura em centimetros aqui!"/>
				<div class="underline"></div>


				<label for="text">Crescimento anual da pessoa 2</label><br />
				<input type="text" name="crescimento2" id="crescimento2" autocomplete="off" size="40" placeholder="Digite o crescimento em centimetros aqui!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php

		include_once 'db_connect.php';
		
		$altura1 = '';
		$altura2 = '';
		$crescimento1 = '';
		$crescimento2 = '';
		
		if(isset($_POST["altura1"]) && ($_POST["altura2"]) && ($_POST["crescimento1"]) && ($_POST["crescimento2"])){

			$altura1 = $_POST["altura1"];
			$altura2 = $_POST["altura2"];
			$crescimento1 = $_POST["crescimento1"];
			$crescimento2 = $_POST["crescimento2"];
			$anos = 0;

			while($altura1 >= $altura2) {

				$altura1 += $crescimento1;
				$altura2 += $crescimento2;
				$anos++;
			}

			echo "<div class='results'>Serão necessário $anos Anos para que a pessoa 1 seja maior do que pessoa 2.<div/>";
		

		$altura1 = mysqli_escape_string($connect, $_POST["altura1"]);
		$altura2 = mysqli_escape_string($connect, $_POST["altura2"]);
		$crescimento1 = mysqli_escape_string($connect, $_POST["crescimento1"]);
		$crescimento2 = mysqli_escape_string($connect, $_POST["crescimento2"]);
		
		$sql = "INSERT INTO Resultados (`altura1`, `altura1`, `crescimento1`, `crescimento2`) VALUES ('$altura1', '$altura2','$crescimento1', '$crescimento2')";
		}
		
		?>
		
		</main>
		
		</body>
	</html>
