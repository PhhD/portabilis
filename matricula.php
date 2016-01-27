<html>
<head>
	<meta http-equiv="Content-Type" content="text/html, charset-utf-8">
	<title>PORTABILIS AVALIACAO TECNICA - MATRICULA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div id="cadastro">
		<form method="post" action="matriculando.php">
			<table id="TABELACAD">
			<td><h1>MATRICULAS - PORTABILIS</h1></td>
				<tr>
				<td>ALUNO:</td>
				<td><input type="text" name="aluno" id="aluno" class="txt" maxlength="60" /></td></tr>
				<tr>
				<td>CURSO:</td>
				<td><input type="text" name="curso" id="curso" class="txt" maxlength="60" /></td></tr>

				<tr><td>RG:</td>
				<td><input type="text" name="rg" id="rg" class="txt"/></td></tr>

				<tr><td>CPF:</td>
				<td><input type="text" name="cpf" id="cpf" class="txt"/></td></tr>

				<tr><td>DATA DA MATRICULA:</td>
				<td><input type="text" name="datamat" id="datamat" class="txt"/></td></tr>		
				
				<tr><td>ANO:</td>
				<td><input type="text" name="ano" id="ano" class="txt"/></td></tr>
				<tr>
				<td colspan="2"><input type="submit"  value="Cadastrar" id="btnCad"> 
				&nbsp;
				<a href="./">
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