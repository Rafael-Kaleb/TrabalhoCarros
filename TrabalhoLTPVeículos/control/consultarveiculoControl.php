<?php
    require_once '../model/DTO/veiculoDTO.php';
    require_once '../model/DAO/veiculoDAO.php';
    require_once '../model/DAO/conexao.php';

    $veiculoDTO = new veiculoDTO();
    $veiculoDAO = new veiculoDAO($conexao);
    $veiculoDAO->consultarVeiculo($veiculoDTO);
    
?>