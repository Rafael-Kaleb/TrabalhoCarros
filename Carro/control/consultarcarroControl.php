<?php
    require_once '../model/DTO/carroDTO.php';
    require_once '../model/DAO/carroDAO.php';
    require_once '../model/DAO/conexao.php';

    $carroDTO = new carroDTO();
    $carroDAO = new carroDAO($conexao);
    $carroDAO->consultarcarro($carroDTO);
    
?>