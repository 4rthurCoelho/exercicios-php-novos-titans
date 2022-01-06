<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Exercicio-11</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/ex11/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
		<h2>Exercício 11</h2>
		
		<p><br />Adicione um número e o algoritimo irá imprimir a tabuada deste número!<br /></p>
		
		<br />
		
		<form id="formulario" action="/ex11/index.php" method="post">
			<div class="input-field">
				<label for="number">Número</label><br />
				<input type="number" name="value1" id="valor1" autocomplete="off" placeholder="Coloque o número aqui!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php
			$num = '';
					
			if(isset($_POST['value1'])) {
						
				$num = $_POST['value1'];
				$mult = 1;
			
				for ($i=0; $i <= 10; $i++) { 
					$mult = $num * $i;
					echo "<div class='results'>$num X $i = $mult<div>" . "<div class='results'>\n<div>";
				}
			}
		?>
		
		</main>
		
		</body>
	</html>