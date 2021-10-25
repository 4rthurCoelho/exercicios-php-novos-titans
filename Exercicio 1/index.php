<?php

	$value1 = $value2 = '';	

	if (key_exists('value1', $_POST) && key_exists('value2', $_POST)) {
		$value1 = $_POST['value1'];
		$value2 = $_POST['value2'];
		
		$sum = $value1 + $value2;
		
		if ($sum > 20){
			$sum = $sum + 8;
		}
		
		if ($sum <= 20){
			$sum = $sum - 5;
		}
		
		
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-01</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
	
<main class= "container">
   
	<h2>Exercício 1</h2>

    <p>Coloque os 2 valores, o algoritimo vai ler os 2 números e efetuar a adição. Caso o valor somado seja maior que 20, 
	vai ser apresentando a soma dele mais 8; caso o valor somado seja menor ou igual a 20, sera apresentado a soma subtraindo-se 5.</p>

    <br />

	<form id="formulario" action="index.php" method="post">
		<div class="input-field">
			<label for="email">Valor 1</label><br />
			<input type="text" name="value1" value="<?= $value1 ?>" id="valor1" placeholder="Adicione um valor!"/>
			<div class="underline"></div>
  		</div>
		<div class="input-field">
			<label for="email">Valor 2</label><br />
			<input type="text" name="value2" value="<?= $value2 ?>" id="valor2" placeholder="Adicione um valor!"/>
			<div class="underline"></div>
			<input type="submit" name="enviar" value="Enviar"/>	

		</div>	
		
		
    </form>
		
		<h3>Resposta:</h3>
	
		<?php
			$value1 = $value2 = '';	

            if (key_exists('value1', $_POST) && key_exists('value2', $_POST)) {
                $value1 = $_POST['value1'];
                $value2 = $_POST['value2'];
                
                $sum = $value1 + $value2;
                
                if ($sum > 20){
                    $sum = $sum + 8;
                }
                
                if ($sum <= 20){
                    $sum = $sum - 5;
                }
                echo "<div class='result'>$sum</div>";
                
            }
          
		?>
</main>
</body>
</html>

