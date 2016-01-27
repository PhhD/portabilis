<html>
<head>
  <title>Portabilis Avaliação Técnica - Lista de Aluno</title>
  <?php include('head.php'); ?>
</head>
<body>

<table>
<?php
  $con = mysql_connect("localhost", "hamme859_emma", "emma2016") or die('Não foi possível conectar');

  mysql_select_db("hamme859_emma", $con);
  $query = mysql_query("SELECT * FROM aluno"); 

  while($r = mysql_fetch_array($query)){ ?>
    <tr><td>  <? echo $r['codaluno'];?> </td></tr>
    <tr><td>  <? echo $r['cpf'];?>    </td></tr>
    <tr><td>  <? echo $r['rg'];?>     </td></tr>
    <tr><td>  <? echo $r['datanasc'];?> </td></tr>
    <tr><td>  <? echo $r['nome'];?>   </td></tr>
    <tr><td>  <? echo $r['telefone'];?> </td></tr>
  <?php } ?>

</table>

</body>
</html>
