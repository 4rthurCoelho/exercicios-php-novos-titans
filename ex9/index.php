		<!DOCTYPE html>
		<html lang="pt-br">
		<head>
			<title>Exercicio-09</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/ex9/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
			<h2>Exercício 9</h2>
		
			<p><br />Entre com o número de vezes que se deseja imprimir a palavra SOL!<br /></p>
		
			<br />
		
			<form id="formulario" action="/ex9/index.php" method="post">
				<div class="input-field">
					<label for="number">Vezes</label><br />
					<input type="number" name="value1" id="valor1" autocomplete="off" placeholder="Número de vezes aqui!"/>
					<div class="underline"></div>
				  </div>
					 <input type="submit" name="enviar" value="Enviar" class="enviar"/>	
			</form>
		
			<?php
		
				$vezes = '';		
		
				if(isset($_POST['value1'])) {
		
					$vezes = $_POST['value1'];

					for ($i=0; $i < $vezes; $i++)
					
						echo "<div class='results'>SOL</div>";
			}
		 
		?>
		
		</main>
		
		</body>
		</html>