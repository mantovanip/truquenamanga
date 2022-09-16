<?php

$produto =               $_GET['produto'];
$valor =                 $_GET['valor_produto'];
$tipo_dificuldade =      $_GET['tipo_dificuldade'];


if($produto == ''){
     echo 'Campo Produto é obrigatório.';
     exit;
}

if($valor == ''){
     echo 'Campo valor é obrigatório.';
     exit;
}
if($valor< 0){
     echo 'Campo valor é obrigatório ser maior que zero.';
     exit;
}
if(!is_numeric($valor)){
     echo 'Campo valor é obrigatório ser númerico.';
     exit;
}


$conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga','root','');

$sql = "  INSERT INTO produto (nome_produto,valor_produto,tipo_dificuldade) 
     VALUES ('{$produto}','{$valor}','{$tipo_dificuldade}')";
     $execute = $conexao->exec($sql);
    if($execute){
     echo 'Salvo com sucesso';
 }else{
     echo 'Erro ao salvar';
     exit;
 }

?>


