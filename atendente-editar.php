<h1>Editar Atendente</h1>
<?php
	$sql = "SELECT * FROM funcionario WHERE id_funcionario=".$_REQUEST['id_funcionario'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_funcionario" value="<?php print $row->id_funcionario?>">
	<div class="mb-3">
		<label>Nome do Atendente</label>
		<input type="text" value="<?php print $row->nome_funcionario; ?>" name="nome_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do Atendente</label>
		<input type="text" value="<?php print $row->fone_funcionario; ?>" name="fone_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email do Atendente</label>
		<input type="text" value="<?php print $row->email_funcionario; ?>" name="email_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF do Atendente</label>
		<input type="text" value="<?php print $row->cpf_funcionario; ?>" name="cpf_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>	