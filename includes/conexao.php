<?php
    //dados do mysql
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'IFSP';
    $port = 3306;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro conexão: %s", mysqli_connect_error());

        exit();
    }

?>