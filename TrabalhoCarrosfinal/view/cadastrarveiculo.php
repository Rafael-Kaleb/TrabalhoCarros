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
<h1>Cadastrar veículo</h1> <form method="POST" action="../control/cadastrarveiculoControl.php">
<label>Placa do veiculo: </label>    
<input type="text" name="placa"/>
    <br><br>
    
    <label>Renevan do veiculo: </label>    
    <input type="number" name="renevan"/>
    <br><br>

    <label>Ano do veiculo: </label>    
    <input type="number" name="ano"/>
    <br><br>

    <label>Marca do veiculo: </label>    
    <input type="text" name="marca"/>
    <br><br>

<label>Modelo do veiculo: </label>    
    <input type="text" name="modelo"/>
    <br><br>

<label>Cor do veiculo: </label>    
    <input type="text" name="cor"/>
    <br><br>

<p>Tipo de Combustível:</p>

<label>
    <input type="radio" name="combustivel" value="gasolina" required>
    Gasolina
</label>

<label>
    <input type="radio" name="combustivel" value="etanol">
    Etanol (Álcool)
</label>

<label>
    <input type="radio" name="combustivel" value="diesel">
    Diesel
    <br><br>
    
     <input type="submit" value="Cadastrar" name="btnCadastrar"/>
    <input type="hidden" name="id"/>
</label>


</form>



</body>
</html>