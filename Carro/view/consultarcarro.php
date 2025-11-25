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
    <h1>Consulta carro</h1>
    <table>
        <tr>
            <th>Placa</th>
            <th>Renevan</th>
            <th>Ano</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Combustivel</th>
        </tr>
        <?php    require_once '../model/DTO/carroDTO.php';
                 require_once '../control/consultarcarroControl.php';
        
        $listacarros = $carroDTO->__getListacarros();
        if ($listacarros != null){
            foreach($listacarros as $carro) : ?>
                <tr>
                    <td><?= $carro['Placa'] ?></td>
                    <td><?= $carro['Renevan'] ?></td>
                    <td><?= $carro['Ano'] ?></td>
                    <td><?= $carro['Marca'] ?></td>
                    <td><?= $carro['Modelo'] ?></td>
                    <td><?= $carro['Cor'] ?></td>   
                    <td><?= $carro['Combustivel'] ?></td>
                    <td><button><a href="../control/excluircarroControl.php?id=<?= $carro['id']?>"> Excluir </a></button></td>   
                    <td><button><a href="../view/alterarcarro.php?id=<?= $carro['id']?>"> Alterar </a></button></td>      
                </tr>
        <?php endforeach  ; } ?>
    </table>
</body>
</html>