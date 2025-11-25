<?php

    require_once '../model/DTO/carroDTO.php';
    require_once '../model/DAO/carroDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_GET['id'])){

        $id = $_GET['id'];

        $carroDAO = new carroDAO($conexao);
        $carroDAO->excluircarro( $id);
    }
     header("Location: ../view/consultarcarro.php");
?>