<?php

    require_once '../model/DTO/carroDTO.php';
    require_once '../model/DAO/carroDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_POST['idAlterar'])){

        $id = $_POST['idAlterar'];

        $carroDAO = new carroDAO($conexao);
        $carroDAO->consultarId($id);

        $carroDTO = new carroDTO();
        $carroDTO->__setPlaca($_POST['placa']);
        $carroDTO->__setRenevan($_POST['renevan']);
        $carroDTO->__setAno($_POST['ano']);
        $carroDTO->__setMarca($_POST['marca']);
        $carroDTO->__setModelo($_POST['modelo']);
        $carroDTO->__setCor($_POST['cor']);
        $carroDTO->__setCombustivel($_POST['combustivel']);
    
       $carroDAO->alterarcarro($carroDTO, $id);
    }
    header("Location: ../view/consultarcarro.php");
?>