  <?php
  $con = mysql_connect("localhost", "root", "") or
     die('Não foi possível conectar');
   
   $nome = $_POST['nome'];
   $periodo = $_POST['periodo'];
   $valorinsc = $_POST['valorinsc'];
   
   
   mysql_select_db("portabilis", $con);
   mysql_query("INSERT INTO curso (nome, valorinsc, periodo) 

   	VALUES ('$nome', '$valorinsc', '$periodo')");
   

   mysql_close($con);
   ?>

   