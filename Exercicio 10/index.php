<?php
    //declaração dos 3 vetores
    $vetor=array(1,-1,2,-2,3,-3,4,-4,5,-5,6,-6,7,-7,8,-8,9,-9,10,-10);
    $pos=array();
    $neg=array();

    foreach($vetor as $vet){
        ($vet <= 0) ? $neg[]=$vet : $pos[]=$vet;
    } 
        echo "\n" . "Os vetores positivos são:" . "\n" . "\n";
            print_r($pos);
        
        echo "\n" . "Os vetores negativos são:" . "\n" . "\n";
            print_r($neg);

    $total = array_sum($pos);
    $count = count($neg);

        echo "\n" . "Soma dos positivos: $total";
        echo "\n" . "Quantidade de negativos: $count";
?>