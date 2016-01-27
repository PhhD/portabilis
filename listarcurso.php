<html>
<head>
  <title>Portabilis Avaliação Técnica - Lista de Curso</title>
	<?php include('head.php'); ?>
</head>
<body>
<table>
<?php
	$con = mysql_connect("localhost", "hamme859_emma", "emma2016") or die('Não foi possível conectar');

	mysql_select_db("hamme859_emma", $con);
	$query = mysql_query("SELECT * FROM curso"); 

	while($r = mysql_fetch_array($query)){ ?>
		<tr><td><? echo $r['codcurso'];?></td></tr>
		<tr><td><? echo $r['nome'];?></td></tr>
		<tr><td><? echo $r['periodo'];?></td></tr>
		<tr><td><? echo $r['valorinsc'];?></td></tr>
	<?php } ?>
</table>
</body>
</html>
