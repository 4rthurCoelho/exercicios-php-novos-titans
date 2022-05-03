<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Exercicio-16</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
		<h2>Exercício 16</h2>
		
		<br />

		<p>Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar</p>
		
		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>

		<br />
		
		<form id="formulario" action="/ex16/index.php" method="post">
			<div class="input-field">
				<label for="text">Números</label><br />
				<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Coloque os números aqui!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php
			$vetor = '';
			$par = '';
			$impar = '';	
			$item = '';
			
			if(isset($_POST['value1'])) {
				
				$numbers = $_POST['value1'];

				$vetor=explode (" ", $numbers);
				$par=array();
				$impar=array();
			
				foreach ($vetor as $item) {
					if ($item % 2 == 0) echo "<div class='results'>O Número $item é par <br><div/>";
					else echo "<div class='results'>O Número $item é impar <br><div/>";
				}

			}
		?>
		
		</main>
		
		</body>
	</html>
