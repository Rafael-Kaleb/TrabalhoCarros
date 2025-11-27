<?php
    include_once '../model/DAO/veiculoDAO.php';
    include_once '../model/DAO/conexao.php';
    
    $veiculoDAO = new veiculoDAO($conexao);
    $edita = $veiculoDAO->consultarId($_GET['id']);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../view/cadastrarveiculo.php">Cadastrar</a></li>
            <li><a href="../view/consultarveiculo.php">Consultar</a></li>
        </ul>

    </nav>
<h1>Alterar veículo</h1> <form method="POST" action="../control/alterarveiculoControl.php">
    
    <input type="hidden" name="idAlterar" value="<?= $_GET['id']; ?>" />
    
    <label>Placa do veiculo: </label>    
    <input type="text" name="placa" value="<?= $edita->__getplaca() ?>"/>
    <br><br>
    
    <label>Renevan do veiculo: </label>    
    <input type="number" name="renevan" value="<?= $edita->__getrenevan() ?>"/>
    <br><br>

    <label>Ano do veiculo: </label>    
    <input type="number" name="ano" value="<?= $edita->__getano() ?>"/>
    <br><br>

    <label>Marca do veiculo: </label>    
    <input type="text" name="marca" value="<?= $edita->__getmarca() ?>"/>
    <br><br>

    <label>Modelo do veiculo: </label>    
    <input type="text" name="modelo" value="<?= $edita->__getmodelo() ?>"/>
    <br><br>

    <label>Cor do veiculo: </label>    
    <input type="text" name="cor" value="<?= $edita->__getcor() ?>"/>
    <br><br>

    <label>Combustível do veiculo: </label>    
    <input type="text" name="combustivel" value="<?= $edita->__getcombustivel() ?>"/>
    <br><br>

    <input type="submit" value="Alterar " name="btnAlterar"/>
    
 
</form>



</body>
</html>