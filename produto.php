<?php $conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga', 'root', '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="truque.css">

    <title>Tabela de Produtos</title>
</head>

<body>
    <div>
        <a href="http://localhost/truquenamanga/index.php">Cadastro Cliente</a>
        <a href="http://localhost/truquenamanga/dificuldade.php">Cadastro Dificuldade</a>
        <a href="http://localhost/truquenamanga/produto.php">Cadastro Produtos</a>
        <a href="http://localhost/truquenamanga/pedido.php">Cadastro Pedidos</a>
    </div>
        <form method="GET" action="cadastro_produto.php">
            <fieldset>
                <legend class="legend">Cadastro de Produto</legend>
                <div>

                    <label for="produto">Produto</label>
                    <input type="text" id="produto" placeholder="ex. vara mágica" name="produto" />

                </div>
                <div>
                    <label for="valor_produto">Valor</label>
                    <input type="text" id="valor_produto" placeholder="valor produto" name="valor_produto" />
                </div>

                <div>
                    <label for="grau_dificuldade">Grau de Dificiuldade</label>
                    <select name="tipo_dificuldade" id="tipo_dificuldade">

                        <?php
                        $conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga', 'root', '');

                        $sql        = ' SELECT * FROM grau_dificuldade';
                        $dataset    = $conexao->query($sql);
                        $resultset  = $dataset->fetchAll();

                        foreach ($resultset as $row) {
                            echo '<option value="' . $row['id'] . '">' . $row['tipo_dificuldade'] . '</option>';
                        }
                        ?>


                    </select>
                    <input class="sub" type="submit" value="Enviar" />

            </fieldset>
        </form>
</body>

</html>