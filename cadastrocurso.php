<html>
<head>
  <title>Portabilis Avaliação Técnica - Cadastro de Curso</title>
	<?php include('head.php'); ?>
</head>
<body>
	<div id="cadastro">
		<form method="post" action="cadastrandocurso.php"  class="form-horizontal">
			<table id="TABELACAD">
			<td><h1>CADASTRO DE CURSOS - PORTABILIS</h1></td>
				<tr>
				<div class="form-group">
				<td>NOME:</td>
				<td><input type="text" name="nome" id="nome" class="txt" maxlength="60" /></td></tr>
				</div>
				<div class="form-group">
				<tr><td>PERIODO::</td>
				<td>
					<select name="periodo" id="periodo">
						<option value="1">MATUTINO</option>
						<option value="2">VESPERTINO</option>
						<option value="3">INTEGRAL</option>
					</select></td></tr>
					</div>
					<div class="form-group">
				<tr>
					<td>VALOR DA INSCRICAO:</td>
					<td><input type="text" name="valorinsc" id="valorinsc" class="txt"/></td>
				</tr>
				</div>
				<div class="form-group">
				<tr>

				<td colspan="2"><input type="submit"  value="Cadastrar" id="btnCad"> 
					<a href="cadastrocurso.php"><input type="button" value="Cancelar" class="btn" id="btnCancelar"></a>
				</td>
			</tr>
			</div>
			<div class="form-group">
				<td>
					<a href="listarcurso.php"><input type="button" value="Listar" class="btn" id="btnCancelar"></a>
				</td>
			</tr>
			</div>
			<div class="form-group">
			<tr>
				<td>
					<a href="index.php"><input type="button" value="inicio" class="btn" id="btnCancelar"></a>
				</td>
			</tr>
			</div>
			</table>
		</form>
	</div>
</div>	
</body>
</html>
