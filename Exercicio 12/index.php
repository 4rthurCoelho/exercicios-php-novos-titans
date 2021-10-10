<?php 
	$palavra = $argv[1];
	$tam = strlen($palavra);

	for ($i=1; $i <= $tam; $i++) { 

		for($y = 1; $y <= $i; $y++){
			echo "$palavra ";	
		}
			echo "\n";
	} 

 ?>