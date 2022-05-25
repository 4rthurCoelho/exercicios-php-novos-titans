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
		
		<h2>Exercício 17</h2>
		
		<br />

		<p>Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números pare e média dos elementos do vetor.</p>
		
		<br />

		<p>ATENÇÃO: De espaço em cada numero :)</p>

		<br />
		
		<form id="formulario" action="/ex17/index.php" method="post">
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
			$numbers = '';
			
			if(isset($_POST['value1'])) {
				
				$numbers = $_POST['value1'];

				$vetor=explode (" ", $numbers);
				$maior = $vetor[0];
				$menor = $vetor[0];
				$par = 0;
				$soma = array_sum($vetor);
			
				foreach ($vetor as $item) {
					if($item > $maior)
					{
						$maior = $item;
					}
					if($item < $menor)
					{
						$menor = $item;
					}
					if($item % 2 == 0)
					{
						$par++;
					}
				}

				$percPar = ($par/20)*100;

				echo "<div class='results'>De todos os numeros informado o maior é o {$maior}<br><div/>";
				echo "<div class='results'>Já o menor numero é o {$menor}<br><div/>";
				echo "<div class='results'>Porcentagem de Numeros Pares: {$percPar}%<br><div/>";
				echo "<div class='results'>Soma de todos os numeros: {$soma}<div/>";
			}
		?>
		
		</main>
		
		</body>
	</html>