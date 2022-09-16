<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="truque.css">
    <title>Truque na Manga</title>
</head>

<body>
    <div>
        <a href="http://localhost/truquenamanga/index.php">Cadastro Cliente</a>
        <a href="http://localhost/truquenamanga/dificuldade.php">Cadastro Dificuldade</a>
        <a href="http://localhost/truquenamanga/produto.php">Cadastro Produtos</a>
        <a href="http://localhost/truquenamanga/pedido.php">Cadastro Pedidos</a>
    </div>
    <form method="GET" action="cadastro_cliente.php">
        <fieldset>
            <legend class="legend" for="nome"> Cadastro de Cliente</legend>
            <div>
                <label for="nome">Nome Magico:</label>
                <input type="text" id="nome_magico" placeholder="digite seu nome" name="nome_magico" />

                <input class="sub" type="submit" value="Salvar">
            </div>
        </fieldset>
    </form>
</body>

</html>