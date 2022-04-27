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

		<p>Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. 
		Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmo que imprima o tempo necessário para que a massa
		desse material seja menor que 0.10. O algoritmo pode calcular o tempo para várias massas.</p>
		
		<br />
		
		<form id="formulario" action="/ex15/index.php" method="post">
			<div class="input-field">
				<label for="text">Massa</label><br />
				<input type="text" name="massa" id="massa" autocomplete="off" placeholder="Coloque o valor da massa aqui!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php
		if(isset($_POST["massa"])){
			$massaInicial = ($_POST['massa']);
			$massaFinal = $massaInicial;
			$segundos = 0;
			
			while ($massaFinal>= 0.10)
			{
				
				$massaFinal = $massaFinal / 0.25;
				$segundos += 30;
			
			}
			
			$m = $segundos/60;
			
			echo "<div class='results'>Tempo : $m minutos<div/>";
		}
		?>
		
		</main>
		
		</body>
	</html>