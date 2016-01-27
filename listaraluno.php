 <!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<title>LISTAR ALUNOS - PORTABILIS</title>
 </head>
 
 
 
 
 <body>
 
 

  <?php
  $con = mysql_connect("localhost", "root", "") or
     die('Não foi possível conectar');

     mysql_select_db("portabilis", $con);
   $query = mysql_query("SELECT * FROM aluno"); 

   while($r = mysql_fetch_array($query)){
   	echo $r['codaluno']."<br>";
   	echo $r['cpf']."<br>";
   	echo $r['rg']."<br>";
   	echo $r['datanasc']."<br>";
   	echo $r['nome']."<br>";
   	echo $r['telefone']."<br>";
   }


	


	?>


	<table >
	<tr><td>	<? echo $r['codaluno'];?>	</td></tr>
	<tr><td>	<? echo $r['cpf'];?>		</td></tr>
	<tr><td>	<? echo $r['rg'];?>			</td></tr>
	<tr><td>	<? echo $r['datanasc'];?>	</td></tr>
	<tr><td>	<? echo $r['nome'];?>		</td></tr>
	<tr><td>	<? echo $r['telefone'];?>	</td></tr>
	<tr><td>	<?php print_r($r) ?>; 		</td></tr>

		
	</table>

</body>
</html>
