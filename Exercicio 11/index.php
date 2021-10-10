<?php 

	$num = $argv[1];
    $mult = 1;

	print "Tabuada de Multiplicação" . "\n";
	for ($i=0; $i <= 10; $i++) { 
		$mult = $num * $i;
		echo "$num * $i = $mult" . "\n";
	}

 ?>