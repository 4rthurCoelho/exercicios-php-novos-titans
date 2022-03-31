<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Exercicio-15</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
		<h2>Exercício 15</h2>
		
		<br />

		<p>Ler vários números e informar quantos números entre 100 e 200 foram digitados.
        Se o valor 0 for lido encerrar a execução</p>

		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>
		
		<br />
		
		<form id="formulario" action="/ex15/index.php" method="post">
			<div class="input-field">
				<label for="text">Números</label><br />
				<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Coloque os números aqui!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php

			
		?>
		
		</main>
		
		</body>
	</html>