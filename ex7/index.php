<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio-07</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>

<main class= "container">
   
	<h2>Exercício 7</h2>

    <p><br />Coloque seu nome e cargo para saber quantos dias tem para devolver o livro!<br /></p>

    <br />

	<form id="formulario" action="index.php" method="post">
		<div class="input-field">
			<label for="text">Nome</label><br />
			<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Qual é o seu nome?"/>
			<div class="underline"></div>
  		</div>
		
		<div class="input-field">
			<label for="text">Professor ou Aluno?</label><br />
			<input type="text" name="value2" id="valor2" autocomplete="off" placeholder="Escreva aqui o cargo!"/>
			<div class="underline"></div>
  		</div>
  		</div>
			 <input type="submit" name="enviar" value="Enviar" class="enviar"/>	
    </form>

	<?php

        $nome = '';		
        $user = '';

        if(isset($_POST['value1']) && ($_POST['value2'])) {

        $livro = "Vermelho Branco e Sangue Azul";
        $nome = $_POST['value1'];
        $user = $_POST['value2'];

        if ($user === "Professor" || $user === "professor"){
    
            echo "<div class='results'>Professor $nome. Você tem 10 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro</div>";
    
        }elseif ($user === "Professora" || $user === "professora"){
    
            echo "<div class='results'>Professora $nome. Você tem 10 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro</div>";
    
        } elseif ($user === "Aluno" || $user === "aluno") {
    
            echo "<div class='results'>Aluno: $nome. Você tem 03 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro</div>";
    
        } elseif ($user === "Aluna" || $user === "aluna") {
    
            echo "<div class='results'>Aluna: $nome. Você tem 03 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro</div>";
       
        } else {
    
            echo "<div class='results'>Usuário não Identificado. Você não está apto para fazer o empréstimo de um livro.</div>";
    
        }
    
    }
 
?>

</main>

</body>
</html>