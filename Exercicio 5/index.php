<?php
	 
	$AB = $argv[1];
	$BC = $argv[2];
	$AC = $argv[3];

	if ($AB==$BC && $BC==$AC) 
		echo "Com estes valores temos um Triangulo Equilatero :)";
	
	elseif ($AB!=$AC && $AB!=$BC && $BC!=$AC)
		echo "Com estes valores temos um Triangulo Escaleno :)";
	
	else
		echo "Com estes valores temos um Triangulo Isosceles :)";
		
?>