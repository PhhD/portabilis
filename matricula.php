<html>
<?php include('head.php'); ?>
<head>
	<title>Portabilis Avaliação Técnica - Matricula</title>
	<?php include('head.php'); ?>
</head>
<body>
<div id="cadastro">
	<form method="post" action="matriculando.php" class="form-horizontal">
		<table id="TABELACAD">
			<td><h1>MATRICULAS - PORTABILIS</h1></td>
			<div class="form-group">
			<tr>
				<td>NUMERO ALUNO:</td>
				<td><input type="text" name="aluno" id="aluno" class="txt" maxlength="60" /></td></tr>
			</div>

			<div class="form-group">
			<tr>
			<td>CURSO:</td>
			<td><input type="text" name="curso" id="curso" class="txt" maxlength="60" /></td></tr>
			</div>

			<div class="form-group">
			<tr>
				<td>RG:</td>
				<td><input type="text" name="rg" id="rg" class="txt"/></td>
			</tr>
			</div>


			<div class="form-group">
			<tr>
				<td>CPF:</td>
				<td><input type="text" name="cpf" id="cpf" class="txt"/></td>
			</tr>
			</div>


			<div class="form-group">
			<tr>
				<td>DATA DA MATRICULA:</td>
				<td><input type="text" name="datamat" id="datamat" class="txt"/></td>
			</tr>		
			</div>

			<div class="form-group">
			<tr>
				<td>ANO:</td>
				<td><input type="text" name="ano" id="ano" class="txt"/></td>
			</tr>
			</div>

			<div class="form-group">
			<tr>
				<td colspan="2"><input type="submit"  value="Cadastrar" id="btnCad"> 
					<a href="./">
						<input type="button" value="Cancelar" class="btn" id="btnCancelar">
					</a>
				</td>
			</tr>
			</div>
			
			<div class="form-group">
			<td colspan="2"><input type="submit"  value="Listar" id="btnCad"></td>

			<tr>
				<td><a href="index.php"><input type="button" value="inicio" class="btn" id="btnCancelar"></a></td>
			</tr>
			</div>

		</table>
	</form>
</div>
</body>
</html>