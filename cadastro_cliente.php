    <?php
     $nome  = $_GET['nome_magico'];

     if($nome == ''){
          echo 'Campo nome é obrigatório.';
     exit;
}


     $conexao = new PDO('mysql:host=localhost;port=3306;dbname=truque_na_manga', 'root', '');

     $sql = "  INSERT INTO cliente (nome_magico) 
     VALUES ('{$nome}');";

     $execute = $conexao->exec($sql);
          if($execute){
               echo 'Salvo com Sucesso';
          exit;
     }else
          {'Seu cadastro não foi salvo';}  
          exit;
          
     