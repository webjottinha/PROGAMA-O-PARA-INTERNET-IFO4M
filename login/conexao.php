<?php 

    $host = 'localhost'; 
    $usario = 'root'; 
    $senha = ""; 
    $database = 'login'; 

    $conn = new mysqli ($host, $usario, $senha, $database);

  
        if($conn->connect_error){
            die ("Algo deu errado com a conexão" );
        }


?>