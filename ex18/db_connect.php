<?php
$servername = "localhost:3306";
$username = "root";
$password = "senha";
$db_name = "exercicios";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;