<?php
    include_once '../model/DAO/veiculoDAO.php';
    include_once '../model/DAO/conexao.php';
    
    

    $veiculoDAO = new veiculoDAO($conexao);
    $edita = $veiculoDAO->consultarId($_GET['id']);
    //var_dump($edita);
    //echo $edita['nome'];

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
</header>

<h1>Alterar veiculo</h1>


<form method="POST" action="../control/alterarveiculoControl.php">
    
    <input type="hidden" name="idAlterar" value="<?= $_GET['id']; ?>" />
    
    <label>Nome do veiculo: </label>    
    <input type="text" name="nome" value="<?= $edita->__getNome() ?>"/>
    <br><br>
    
    <label>Valor do veiculo: </label>    
    <input type="text" name="valor" value="<?= $edita->__getValor() ?>"/>
    <br><br>

    <label>Quantidade do veiculo: </label>    
    <input type="number" name="quantidade" value="<?= $edita->__getQuantidade() ?>"/>
    <br><br>

    <label>Descrição do veiculo: </label>    
    <input type="text" name="descricao" value="<?= $edita->__getDescricao() ?>"/>
    <br><br>

    <input type="submit" value="Alterar " name="btnCadastrar"/>
    
 
</form>



</body>
</html>