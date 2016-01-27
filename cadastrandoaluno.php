<html>
<head>
  <title>Portabilis Avaliação Técnica - Cadastro de Aluno</title>
  <?php include('head.php'); ?>
</head>
<body>
<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $datanasc = $_POST["datanasc"];
  $telefone = $_POST["telefone"];

  mysql_select_db("portabilis", $con);

  $db_selected = mysql_select_db("portabilis", $con);

  if (!$db_selected) {
    echo "Não conectado";
  }else{
    echo "conectado";
  }

  $sql = mysql_query("INSERT INTO aluno (cpf, rg, datanasc, nome, telefone) VALUES ($cpf, $rg, $datanasc, $nome, $telefone)");

  /*mysql_close($con);
  if(!$sql){
    echo "Aluno não cadastrado";
  }else{
    echo "Aluno cadastrado";
  }*/
        echo "<script>



alert('CADASTRO EFETUADO COM SUCESSO');

window.location.href = 'index.php';



</script>";
?>
</body>
</html>