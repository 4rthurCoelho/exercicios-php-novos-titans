<?php
$servername = "dbMysql";
$username = "root";
$password = "11213141516";
$db_name = "ex14";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;
