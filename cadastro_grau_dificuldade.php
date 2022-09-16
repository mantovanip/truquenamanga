<?php
$tipo_dificuldade = $_GET['tipo_dificuldade'];

 

 if($tipo_dificuldade == ''){
      echo 'Campo grau é obrigatório.';
      exit;
 }


 $conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga', 'root', '');

 $sql = "  INSERT INTO grau_dificuldade(tipo_dificuldade) 
    VALUES ('{$tipo_dificuldade}');";

 $execute = $conexao->exec($sql);
      if($execute){
           echo 'Salvo com Sucesso';
      }else
      {'Seu cadastro não foi salvo';
          exit;  }
