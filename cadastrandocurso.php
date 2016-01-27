<html>
<head>
  <title>Portabilis Avaliação Técnica - Cadastro de Curso</title>
  <?php include('head.php'); ?>
</head>
<body>
<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');

  $nome = $_POST['nome'];
  $periodo = $_POST['periodo'];
  $valorinsc = $_POST['valorinsc'];


  mysql_select_db("portabilis", $con);

  $db_selected = mysql_select_db("portabilis", $con);

  if (!$db_selected) {
  echo "Não conectado";
  }else{
  echo "conectado";
  }

  $sql = mysql_query("INSERT INTO curso (nome, valorinsc, periodo) VALUES ($nome, $valorinsc, $periodo)");

  mysql_close($con);

 /* if(!$sql){
    echo "Curso não cadastrado";
  }else{
    echo "Curso cadastrado com sucesso";
  }*/
  echo "<script>



alert('Cadastro Efetuado com sucesso');

window.location.href = 'index.php';



</script>";

?>
</body>
</html>