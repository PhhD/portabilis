<html>
<head>
	  <title>Portabilis Avaliação Técnica - Matricula</title>
	<?php include('head.php'); ?>
</head>
<body>
<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');

  $aluno = $_POST['aluno'];
  $curso = $_POST['curso'];
  $rg = $_POST["rg"];
  $cpf = $_POST["cpf"];
  $datamat = $_POST["datamat"];
  $ano = $_POST["ano"];

  mysql_select_db("portabilis", $con);

  $db_selected = mysql_select_db("portabilis", $con);

  if (!$db_selected) {
    echo "Não conectado";
  }else{
    echo "conectado";
  }

  $sql = mysql_query("INSERT INTO matricula (aluno, curso, rg, cpf, datamat, ano) VALUES ($aluno, $curso, $rg, $cpf,$datmat, $ano)");

 /* mysql_close($con);
  if(!$sql){
    echo "Matricula não realizada";
  }else{
    echo "Matricula realizada com sucesso";
  }*/
  echo "<script>



alert('CADASTRO EFETUADO COM SUCESSO');

window.location.href = 'index.php';



</script>";
  
?>
</body>
</html>