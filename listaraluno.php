<html>
<head>
  <title>Portabilis Avaliação Técnica - Lista de Aluno</title>
  <?php include('head.php'); ?>

</head>
<body>

<div class="container">
  <table id="tabelalista" class="table table-hover">
    <thead>
      <tr>
        <th>Codigo Aluno</th>
        <th>NOME</th>
        <th>CPF</th>
        <th>RG</th>
        <th>DATA DE NASCIMENTO</th>
        <th>TELEFONE</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $con = mysql_connect("localhost", "hamme859_emma", "emma2016") or die('Não foi possível conectar');
    mysql_select_db("hamme859_emma", $con);
    
    

    $query = mysql_query("SELECT * FROM aluno") or die(mysql_error()); 

    print_r($query);

    while($r = mysql_fetch_array($query)){ ?>
    <tr>
      <td><? echo $r['codaluno'];?></td>
      <td><? echo $r['nome'];?></td>
      <td><? echo $r['cpf'];?></td>
      <td><? echo $r['rg'];?></td>
      <td><? echo $r['datanasc'];?></td>
      <td><? echo $r['telefone'];?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
