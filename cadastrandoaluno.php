  <?php
  $con = mysql_connect("localhost", "root", "") or
     die('Não foi possível conectar');
   
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $rg = $_POST['rg'];
   $datanasc = $_POST["datanasc"];
   $telefone = $_POST["telefone"];
   
   mysql_select_db("portabilis", $con);
   mysql_query("INSERT INTO aluno (cpf, rg, datanasc, nome, telefone) 

   	VALUES ('$cpf', '$rg', '$datanasc', '$nome','$telefone')");
   

   mysql_close($con);
   ?>

   