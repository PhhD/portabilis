<html>
<head>
  <title>Portabilis Avaliação Técnica - Cadastro de Aluno</title>
	<?php include('head.php'); ?>
</head>
<body>
	<div id="cadastro">
		<form method="post" action="cadastrandoaluno.php">
			<table id="TABELACAD">

			<td><h1>CADASTRO DE ALUNOS - PORTABILIS</h1></td>
				<tr>
				<td>NOME:</td>
				<td><input type="text" name="nome" id="nome" class="txt" maxlength="60" /></td></tr>

				<tr><td>RG:</td>
				<td><input type="text" name="rg" id="rg" class="txt"/></td></tr>

				<tr><td>CPF:</td>
				<td><input type="text" name="cpf" id="cpf" class="txt"/></td></tr>

				<tr><td>DATA DE NASCIMENTO:</td>
				<td><input type="text" name="datanasc" id="datanasc" class="txt"/></td></tr>		
				
				<tr><td>TELEFONE:</td>
				<td><input type="text" name="telefone" id="telefone" class="txt"/></td></tr>
				<tr>
				<td colspan="2"><input type="submit"  value="Cadastrar" id="btnCad">
					<a href="cadastroaluno.php">
						<input type="button" value="Cancelar" class="btn" id="btnCancelar">
					</a>
				</td>
				<td colspan="2">
					<a href="listaraluno.php"><input type="button" value="Listar" class="btn" id="btnCancelar"></a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="index.php"><input type="button" value="inicio" class="btn" id="btnCancelar"></a>
				</td>
			</tr>
			</table>
		</form>
	</div>
</div>	
</body>
</html>

