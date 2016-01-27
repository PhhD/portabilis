<html>
<head>
  <title>Portabilis Avaliação Técnica - Cadastro de Curso</title>
  <?php include('head.php'); ?>
</head>
<body>
<?php
  $con = mysql_connect("localhost", "hamme859_emma", "emma2016") or die('Não foi possível conectar');

  $nome = $_POST['nome'];
  $periodo = $_POST['periodo'];
  $valorinsc = $_POST['valorinsc'];


  mysql_select_db("hamme859_emma", $con);

  $db_selected = mysql_select_db("hamme859_emma", $con);

  /*if (!$db_selected) {
  echo "Não conectado";
  }else{
  echo "conectado";
  }*/

  $sql = mysql_query("INSERT INTO curso (nome, valorinsc, periodo) VALUES ($nome, $valorinsc, $periodo)");

  mysql_close($con);

  if(!$sql){
    echo "Curso não cadastrado";
  }else{
    echo "Curso cadastrado com sucesso";
  }

?>
</body>
</html>