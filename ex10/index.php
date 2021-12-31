<!DOCTYPE html>
		<html lang="pt-br">
		<head>
			<title>Exercicio-10</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/ex10/style.css">
			<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		</head>
		<body>
		
		<main class= "container">
			
		<a href="../index.php" id="voltar">Voltar</a>
		
			<h2>Exercício 10</h2>
		
			<p><br />Entre com 20 números positivos e negativos e o algoritimo vai mostrar a soma dos positivos e o total de números negativos.<br /></p>
            <p><br />ATENÇÃO: De espaço em cada numero :)<br /></p>
		
			<br />
		
			<form id="formulario" action="/ex10/index.php" method="post">
				<div class="input-field">
					<label for="text">Números</label><br />
					<input type="text" name="value1" id="valor1" autocomplete="off" placeholder="Coloque os números aqui!"/>
					<div class="underline"></div>
				  </div>
					 <input type="submit" name="enviar" value="Enviar" class="enviar"/>	
			</form>
		
			<?php
		
				$vetor = '';
                $pos = '';
                $neg = '';		
		
				if(isset($_POST['value1'])) {
                    
                    $numeros = $_POST['value1'];
                    
                    $vetor= explode (" ", $numeros);
                    $pos=array();
                    $neg=array();
                
                    foreach($vetor as $vet){
                        ($vet <= 0) ? $neg[]=$vet : $pos[]=$vet;
                    } 
                        echo "<div class='results'>\n</div>" . "<div class='results'>Os vetores positivos são:</div>" . "<div class='results'>\n</div>" . "<div class='results'>\n</div>";
                            print_r($pos);
                        
                        echo "<div class='results'>\n</div>" . "<div class='results'>Os vetores negativos são:</div>" . "<div class='results'>\n</div>" . "<div class='results'>\n</div>";
                            print_r($neg);
                
                    $total = array_sum($pos);
                    $count = count($neg);
                
                        echo "<div class='results'>\n</div>" . "</div><div class='results'>Soma dos positivos: $total</div>";
                        echo "<div class='results'>\n</div>" . "</div><div class='results'>Quantidade de negativos: $count</div>";
			}
		 
		?>
		
		</main>
		
		</body>
		</html>