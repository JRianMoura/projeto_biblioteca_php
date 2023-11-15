<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];

	$res = $conn->query($sql);

	$row = $res->fetch_object();
?>
<form action="?page=usuario-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" value="<?php print $row->nome_usuario; ?>" name="nome_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="text" value="<?php print $row->cpf_usuario; ?>" name="cpf_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Email</label>
		<input type="text" value="<?php print $row->email_usuario; ?>" name="email_usuario" class="form-control">
	</div>
    <div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" value="<?php print $row->data_nasc_usuario; ?>" name="data_nasc_usuario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="tel" id="fone_usuario" name="fone_usuario" required class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>