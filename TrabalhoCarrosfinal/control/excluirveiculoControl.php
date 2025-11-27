<?php

    require_once '../model/DTO/veiculoDTO.php';
    require_once '../model/DAO/veiculoDAO.php';
    require_once '../model/DAO/conexao.php';

    if (!empty($_GET['id'])){

        $id = $_GET['id'];

        $veiculoDAO = new veiculoDAO($conexao);
        $veiculoDAO->excluirveiculo( $id);
    }
     header("Location: ../view/consultarveiculo.php");
?>