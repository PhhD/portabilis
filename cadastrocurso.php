<html>
<head>
	<meta http-equiv="Content-Type" content="text/html, charset-utf-8">
	<title>PORTABILIS AVALIACAO TECNICA - CADASTRO DE CURSOS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div id="cadastro">
		<form method="post" action="cadastrandocurso.php">
			<table id="TABELACAD">
			<td><h1>CADASTRO DE CURSOS - PORTABILIS</h1></td>
				<tr>
				<td>NOME:</td>
				<td><input type="text" name="nome" id="nome" class="txt" maxlength="60" /></td></tr>

				<tr><td>PERIODO::</td>
				<td><select name="periodo" id="periodo">
							<option value="1">MATUTINO</option>
							<option value="2">VESPERTINO</option>
							<option value="3">INTEGRAL</option>
							</select></td></tr>

				<tr><td>VALOR DA INSCRICAO:</td>
				<td><input type="text" name="valorinsc" id="valorinsc" class="txt"/></td></tr>
				
				<tr>
				<td colspan="2"><input type="submit"  value="Cadastrar" id="btnCad"> 
				&nbsp;
				<a href="cadastrocurso.php">
					<input type="button" value="Cancelar" class="btn" id="btnCancelar">
				</a>
			</td>
			</tr>
			<td colspan="2"><input type="submit"  value="Listar" id="btnCad"></td>
			</tr>
			<tr><td><a href="index.php">
					<input type="button" value="inicio" class="btn" id="btnCancelar">
				</a></td></tr>
			


			</table>
		</form>
	</div>
</div>	





</body>
</html>