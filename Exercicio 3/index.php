<?php
	$nome = $argv[1];
    $sexo =  $argv[2];
	$idade = $argv[3];

	if ($sexo == "F" && $idade <= 25) {
		echo "Parabens $nome você foi ACEITA:)";
	}
	else {
		echo "$nome você não foi Aceita(o) pois não atende os requisitos do projeto:(";
	}

?>