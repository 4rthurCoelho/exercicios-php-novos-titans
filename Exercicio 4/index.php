<?php 

		$num1 = $argv[1];
		$num2 = $argv[2];
		$num3 = $argv[3];

		if	   ($num1 > $num2 && $num2 > $num3) echo "$num1 $num2 $num3";
		elseif ($num3 > $num2 && $num2 > $num1) echo "$num3 $num2 $num1";
		elseif ($num2 > $num1 && $num1 > $num3) echo "$num2 $num1 $num3";
		elseif ($num2 > $num1 && $num1 < $num3) echo "$num2 $num3 $num1";
		elseif ($num1 > $num3 && $num3 > $num2) echo "$num1 $num3 $num2";
		elseif ($num3 > $num1 && $num1 > $num2) echo "$num3 $num1 $num2";
		elseif ($num3 > $num1 && $num1 > $num2) echo "$num3 $num1 $num2";
		elseif ($num1 = $num2 && $num2 > $num3) echo "Dois valores iguais não são aceitos :(";
		elseif ($num3 = $num2 && $num2 > $num1) echo "Dois valores iguais não são aceitos :(";
		elseif ($num2 = $num1 && $num1 > $num3) echo "Dois valores iguais não são aceitos :(";
		elseif ($num2 = $num1 && $num1 < $num3) echo "Dois valores iguais não são aceitos :(";
		elseif ($num1 = $num3 && $num3 > $num2) echo "Dois valores iguais não são aceitos :(";
		elseif ($num3 = $num1 && $num1 > $num2) echo "Dois valores iguais não são aceitos :(";
		elseif ($num3 = $num1 && $num1 > $num2) echo "Dois valores iguais não são aceitos :(";



 ?>