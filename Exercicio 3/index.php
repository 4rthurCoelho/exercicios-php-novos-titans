<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-03</title> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
	
<main class= "container">
   
	<h2>Exercício 3</h2>

    <p>Entre com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos,
 	imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.</p>

    <br />

		
		<?php

			$nome = "";
			$sexo = "";
			$idade = "";

			if(isset($_POST['valeu1']) && ($_POST['value2']) && ($_POST['value3'])) {
				
				$nome = $_POST['value1'];
				$sexo = $_POST['value2'];
				$idade = $_POST['value3'];
			
				if ($sexo == "F" && $idade <= 25) {
					echo "<div class='results'>Parabens $nome você foi ACEITA:)</div>";
				}
				
				else if ($sexo == "f" && $idade <= 25) {
					echo "<div class='results'>Parabens $nome você foi ACEITA:)</div>";
				}

				else if ($sexo == "Feminino" && $idade <= 25) {
					echo "<div class='results'>Parabens $nome você foi ACEITA:)</div>";
				}

				else if ($sexo == "feminino" && $idade <= 25) {
					echo "<div class='results'>Parabens $nome você foi ACEITA:)</div>";
				}

				else {
					echo "<div class='results'>$nome você não foi Aceita(o) pois não atende os requisitos do projeto:(</div>";
				}
			
			}

          
		?>

	<form id="formulario" action="index.php" method="POST">
		<div class="input-field">
			<label for="text">Nome</label><br />
			<input type="text" name="value1" value="<?= $nome ?>" id="nome" autocomplete="off" placeholder="Escreva seu nome aqui! "/>
			<div class="underline"></div>
  		</div>
		<div class="input-field">
			<label for="text">Sexo</label><br />
			<input type="text" name="value2" value="<?= $sexo ?>" id="sexo" autocomplete="off" placeholder="Qual é o seu sexo? (F/M)"/>
			<div class="underline"></div>
		</div>	
	    <div class="input-field"><br />
			<label for="number">Idade</label><br />
			<input type="number" name="value3" value="<?= $idade ?>" id="idade" autocomplete="off" placeholder="Qual é a sua idade?"/>
			<div class="underline"></div>
			

		</div>	

		<input type="submit" name="enviar" value="Enviar"/>	
		
    </form>

</main>
</body>
</html>