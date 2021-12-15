
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-02</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<div class= "containerplus">
<main class= "container">
   
	<h2>Exercício 2</h2>

    <p><br />Entre com um número e o algoritimo informará se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes :)<br /></p>

    <br />

	<form id="formulario" action="/ex2/index.php" method="post">
		<div class="input-field">
			<label for="number">Número</label><br />
			<input type="number" name="value" value="<?= $num ?>" id="valor1" placeholder="Adicione um valor!"/>
			<div class="underline"></div>
  		</div>
		
		  <input type="submit" name="enviar" value="Enviar"/>	

	
		
    </form>

	<?php

    if(isset($_POST['value']) ){
	$numer = $_POST['value'];


    if ($numer%10 == 0 && $numer%5 == 0 && $numer%2 == 0) echo "<div class='results'>O número $numer é divisível por 10, por 5 e por 2!</div>";
    elseif ($numer%5 == 0 && $numer%2 == 0)  echo "<div class='results'>O número $numer é divisível por 5 e por 2!</div><br />";
	elseif ($numer%5 == 0 && $numer%10 == 0)  echo "<div class='results'>O número $numer é divisível por 5 e por 10!</div><br />";
	elseif ($numer%10 == 0 && $numer%2 == 0)  echo "<div class='results'>O número $numer é divisível por 10 e por 2!</div><br />";
	elseif ($numer%10 == 0)  echo "<div class='results'>O número $numer é divisível por 10</div><br />";
	elseif ($numer%5 == 0)  echo "<div class='results'>O número $numer é divisível por 5</div><br />";
	elseif ($numer%2 == 0)  echo "<div class='results'>O número $numer é divisível por 2</div><br />";

    else echo "<div class='results'>O número $numer não é divisível por 10, nem por 5 e nem por 2!</div>";

}
?>

</main>
</div>

</body>
</html>
