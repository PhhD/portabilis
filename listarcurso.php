 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<title>LISTAR CURSOS - PORTABILIS</title>
 </head>
 
 
 
 
 <body>
 
 

  <?php
  $con = mysql_connect("localhost", "root", "") or
     die('Não foi possível conectar');

     mysql_select_db("portabilis", $con);
   $query = mysql_query("SELECT * FROM curso"); 

   while($r = mysql_fetch_array($query)){
   	echo $r['codcurso']."<br>";
   	echo $r['nome']."<br>";
   	echo $r['periodo']."<br>";
   	echo $r['valorinsc']."<br>";
   


	


	?>


	<table >
	<tr><td>	<? echo $r['codcurso'];?>	</td></tr>
	<tr><td>	<? echo $r['nome'];?>		</td></tr>
	<tr><td>	<? echo $r['periodo'];?>			</td></tr>
	<tr><td>	<? echo $r['valorinsc'];?>	</td></tr>
	<tr><td>	<?php print_r($r) ?>; 		</td></tr>

		
	</table>

</body>
</html>
