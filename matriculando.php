<html>
<head>
	  <title>Portabilis Avaliação Técnica - Matricula</title>
	<?php include('head.php'); ?>
</head>
<body>
<?php
  $con = mysql_connect("localhost", "hamme859_emma", "emma2016") or die('Não foi possível conectar');

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $datanasc = $_POST["datanasc"];
  $telefone = $_POST["telefone"];

  mysql_select_db("hamme859_emma", $con);

  $db_selected = mysql_select_db("hamme859_emma", $con);

  /*if (!$db_selected) {
    echo "Não conectado";
  }else{
    echo "conectado";
  }*/

  //$sql = mysql_query("INSERT INTO aluno (cpf, rg, datanasc, nome, telefone) VALUES ($cpf, $rg, $datanasc, $nome,$telefone)");

  mysql_close($con);
  if(!$sql){
    echo "Matricula não realizada";
  }else{
    echo "Matricula realizada com sucesso";
  }

?>
</body>
</html>