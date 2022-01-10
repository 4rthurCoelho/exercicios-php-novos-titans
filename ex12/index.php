<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Exercicio-12</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/ex12/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
		<h2>Exercício 12</h2>
		
		<p><br />Adicione uma palavra e ira imprimir conforme o exemplo.<br /></p>

		<p><br />Palavra: sonho</p>
		<p><br />SONHO</p>
		<p><br />SONHO SONHO</p>
		<p><br />SONHO SONHO SONHO</p>
		<p>br />SONHO SONHO SONHO SONHO</p>


		<br />
		
		<form id="formulario" action="/ex12/index.php" method="post">
			<div class="input-field">
				<label for="text">Palavra</label><br />
				<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Coloque a palavra aqui!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php
			$palavra = '';
			$tam = '';	
			
			if(isset($_POST['value1'])) {
						
				$palavra = $_POST['value1'];
				$tam = strlen($palavra);
			
				for ($i=1; $i <= $tam; $i++) { 
			
					for($y = 1; $y <= $i; $y++){
						echo "$palavra ";	
					}
					echo "<br>";
				}
			}
		?>
		
		</main>
		
		</body>
	</html>
