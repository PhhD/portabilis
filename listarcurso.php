<html>
<head>
  <title>Portabilis Avaliação Técnica - Lista de Curso</title>
	<?php include('head.php'); ?>
</head>
<body>
<div class="container">
  <table id="tabelalista" class="table table-hover">
    <thead>
      <tr>
        <th>Codigo Curso</th>
        <th>Nome</th>
        <th>Periodo</th>
        <th>Valor da Inscricao</th>
        </tr>
    </thead>
    <tbody>
<?php
	$con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');

	mysql_select_db("portabilis", $con);
	$query = mysql_query("SELECT * FROM curso"); 

	while($r = mysql_fetch_array($query)){ ?>
	<tr>
		<td><? echo $r['codcurso'];?></td>
		
		<td><? echo $r['nome'];?></td>
		
		<td><? echo $r['periodo'];?></td>
	
		<td><? echo $r['valorinsc'];?></td>
		</tr>
	<?php } ?>
</table>
</body>
</html>
