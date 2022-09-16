<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="truque.css">

    <title>Grau Dificuldade</title>
</head>

<body>
    <div>
        <a href="http://localhost/truquenamanga/index.php">Cadastro Cliente</a>
        <a href="http://localhost/truquenamanga/dificuldade.php">Cadastro Dificuldade</a>
        <a href="http://localhost/truquenamanga/produto.php">Cadastro Produtos</a>
        <a href="http://localhost/truquenamanga/pedido.php">Cadastro Pedidos</a>
    </div>
        <form method="GET" action="cadastro_grau_dificuldade.php">
            <fieldset>
                <legend class="legend" for="tipo_dificuldade"> Cadastro de Dificuldade</legend>
                <div>
                    <label  for="tipo_dificuldade">Grau Dificuldade:</label>
                    <input type="text" id="tipo_dificuldade" name="tipo_dificuldade" placeholder="Digite grau dificuldade" />

                    <input class="sub" type="submit" value="Salvar">
                </div>
            </fieldset>
        </form>
</body>

</html>