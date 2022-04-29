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
				<input type="text" name="massa" id="massa" autocomplete="off" placeholder="Coloque o valor da massa aqui em gramas!"/>
				<div class="underline"></div>
			</div>

			<div class="input-field">
				<label for="text">Perda</label><br />
				<input type="text" name="perda" id="perda" autocomplete="off" placeholder="Coloque o valor da porcentagem da perda aqui (Ex: Caso o valor for 10% digite apenas 10!"/>
				<div class="underline"></div>
			</div>

			<div class="input-field">
				<label for="text">Tempo</label><br />
				<input type="text" name="tempo" id="tempo" autocomplete="off" placeholder="Coloque aqui em quanto tempo essa perda vai ocorrer!"/>
				<div class="underline"></div>
			</div>
			<input type="submit" name="enviar" value="Enviar" class="enviar"/>	
		</form>
		
		<?php
		if(isset($_POST["massa"]) && ($_POST["perda"]) && ($_POST["tempo"])){
			$massa = ($_POST['massa']);
			$perda = ($_POST["perda"]);
			$tempo = ($_POST["tempo"]);
			
			$count = 0;
    		for($massa; $massa>=0.1; $tempo){
        		$resultado = $massa -($massa / 100 * $perda);
        		$massa = $resultado;
        		$count++;
    		}
    		$tempoFinal = $tempo*$count;

    		$tempoTotal = $tempoFinal / 60;
			
			echo "<div class='results'>Para a massa ser maior ou igual a 0.10 gramas, serão precisos $tempoTotal minutos<div/>";
		}
		?>
		
		</main>
		
		</body>
	</html>