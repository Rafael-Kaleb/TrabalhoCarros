<?php
    require_once '../model/DTO/veiculoDTO.php';
    require_once '../model/DAO/veiculoDAO.php';
    require_once '../model/DAO/conexao.php';
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['btnCadastrar']){
        $veiculoDTO = new veiculoDTO();
        $veiculoDTO->__setPlaca($_POST['placa']);
        $veiculoDTO->__setRenevan($_POST['renevan']);
        $veiculoDTO->__setAno($_POST['ano']);
        $veiculoDTO->__setMarca($_POST['marca']);
        $veiculoDTO->__setModelo($_POST['modelo']);
        $veiculoDTO->__setCor($_POST['cor']);
        $veiculoDTO->__setCombustivel($_POST['combustivel']);
    
            
            $veiculoDAO = new veiculoDAO($conexao);
            $veiculoDAO->cadastrarveiculo($veiculoDTO);
        }

        header("Location: ../view/consultarveiculo.php");
    }

   


?>