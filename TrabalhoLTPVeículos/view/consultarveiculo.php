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
    <h1>Consulta veiculo</h1>
    <table>
        <tr>
            <th>placa</th>
            <th>renevan</th>
            <th>ano</th>
            <th>marca</th>
            <th>modelo</th>
            <th>cor</th>
            <th>combustivel</th>
        </tr>
        <?php    require_once '../model/DTO/veiculoDTO.php';
                 require_once '../control/consultarveiculoControl.php';
        
        $listaveiculos = $veiculoDTO->__getListaveiculos();
        if ($listaveiculos != null){
            foreach($listaveiculos as $veiculo) : ?>
                <tr>
                    <td><?= $veiculo['placa'] ?></td>
                    <td><?= $veiculo['renevan'] ?></td>
                    <td><?= $veiculo['ano'] ?></td>
                    <td><?= $veiculo['marca'] ?></td>
                    <td><?= $veiculo['modelo'] ?></td>
                    <td><?= $veiculo['cor'] ?></td>   
                    <td><?= $veiculo['combustivel'] ?></td>
                    <td><button><a href="../control/excluirveiculoControl.php?id=<?= $veiculo['id']?>"> Excluir </a></button></td>   
                    <td><button><a href="../view/alterarveiculo.php?id=<?= $veiculo['id']?>"> Alterar </a></button></td>      
                </tr>
        <?php endforeach  ; } ?>
    </table>
</body>
</html>