<?php
    $nome       = $_GET['cliente'];
    $produto    = $_GET['produto'];
    $quantidade = $_GET['quantidade'];
    $is_entrega = $_GET['is_entrega'];

if ($quantidade == ''){
     echo 'Campo quantidade é obrigatório.';
     exit;  
 }
 
 if ($quantidade < 0){
     echo 'Campo quantidade não pode ser menor que zero.';
     exit;
 }

 if (!is_numeric($quantidade)){
     echo 'Campo quantidade tem que um número.';
     exit;    
 }  

$conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga','root','');

$sql     = "INSERT INTO pedido (cliente,produto,quantidade,is_entrega) 
VALUES ({$nome},{$produto},{$quantidade},{$is_entrega})";
$execute = $conexao->exec($sql);

if($execute){
    echo 'Salvo com sucesso';
}else{
    echo 'Erro ao salvar';
   exit;
}
