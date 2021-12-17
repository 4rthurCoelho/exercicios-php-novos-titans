

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-01</title> 
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/ex1/style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
	
<main class= "container">
  
<a href="../index.php" id="voltar">Voltar</a>    
 
	<h2>Exercício 1</h2>

    <p>Coloque os 2 valores, o algoritimo vai ler os 2 números e efetuar a adição. Caso o valor somado seja maior que 20, 
	vai ser apresentando a soma dele mais 8; caso o valor somado seja menor ou igual a 20, sera apresentado a soma subtraindo-se 5.</p>

    <br />

	<form id="formulario" action="/ex1/index.php" method="post">
		<div class="input-field">
			<label for="number">Valor 1</label><br />
			<input type="number" name="value1" value="<?= $value1 ?>" id="valor1" placeholder="Adicione um valor!"/>
  		</div>
		<div class="input-field">
			<label for="number">Valor 2</label><br />
			<input type="number" name="value2" value="<?= $value2 ?>" id="valor2" placeholder="Adicione um valor!"/>
			<input type="submit" name="enviar" value="Enviar"/>	
		</div>	
		
		
    </form>
		
		<?php
			$value1 = $value2 = '';	

            if(isset($_POST['value1']) &&($_POST['value1'])) {

                $value1 = $_POST['value1'];
                $value2 = $_POST['value2'];
                
                $sum = $value1 + $value2;
                
                if ($sum > 20){
                    $sum = $sum + 8;
                }
                
                if ($sum <= 20){
                    $sum = $sum - 5;
                }
                echo "<div class='results'>$sum</div>";
                
            }
          
		?>
</main>
</body>
</html>

