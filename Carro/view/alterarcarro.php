<?php
    include_once '../model/DAO/carroDAO.php';
    include_once '../model/DAO/conexao.php';
    
    

    $carroDAO = new carroDAO($conexao);
    $edita = $carroDAO->consultarId($_GET['id']);

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
            <li><a href="../view/cadastrarcarro.php">Cadastrar</a></li>
            <li><a href="../view/consultarcarro.php">Consultar</a></li>
        </ul>

    </nav>
</header>

<h1>Alterar carro</h1>


<form method="POST" action="../control/alterarcarroControl.php">
    
    <input type="hidden" name="idAlterar" value="<?= $_GET['id']; ?>" />
    
    <label>Nome do carro: </label>    
    <input type="text" name="nome" value="<?= $edita->__getNome() ?>"/>
    <br><br>
    
    <label>Valor do carro: </label>    
    <input type="text" name="valor" value="<?= $edita->__getValor() ?>"/>
    <br><br>

    <label>Quantidade do carro: </label>    
    <input type="number" name="quantidade" value="<?= $edita->__getQuantidade() ?>"/>
    <br><br>

    <label>Descrição do carro: </label>    
    <input type="text" name="descricao" value="<?= $edita->__getDescricao() ?>"/>
    <br><br>

    <input type="submit" value="Alterar " name="btnCadastrar"/>
    
 
</form>



</body>
</html>