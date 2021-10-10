<?php

    $livro = [
        "Professor" => "Vermelho Branco e Sangue Azul", 
        "Aluno" => "Outro Livro"
    ];
    $user = $argv[1];
    $nome = $argv[2];

    if ($user === "Professor" || $user === "professor"){

    echo "Professor $nome. Você tem 10 dias a partir da data de empréstimo para fazer a devolução do Livro: " .$livro['Professor'];

    }elseif ($user === "Professora" || $user === "professora"){

    echo "Professora $nome. Você tem 10 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro";

    } elseif ($user === "Aluno" || $user === "aluno") {

        echo "Aluno: $nome. Você tem 03 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro";

    } elseif ($user === "Aluna" || $user === "aluna") {

        echo "Aluna: $nome. Você tem 03 dias a partir da data de empréstimo para fazer a devolução do Livro: $livro";
   
    } else {

        echo "Usuário não Identificado. Você não está apto para fazer o empréstimo de um livro.";

    }


?>