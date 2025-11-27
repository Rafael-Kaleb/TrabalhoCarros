<?php

        $dsn = "mysql:host=localhost;dbname=veiculo";
        $usuario = "root";
        $senha = "";

        try{
            $conexao = new PDO($dsn , $usuario, $senha);
            
            echo ".";
        }catch (PDOException $erro){
            echo "Não foi possível se conectar com o banco de dados: ".$erro->getMessage();
        }
    
?>