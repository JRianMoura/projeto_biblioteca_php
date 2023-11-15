<h1>Cadastrar Atendente</h1>
<form action="?page=atendente-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome do atendente</label>
		<input type="text" name="nome_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone do Atendente</label>
		<input type="text" name="fone_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>E-mail do Atendente</label>
		<input type="text" name="email_funcionario" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF do atendente</label>
		<input type="text" name="cpf_funcionario" class="form-control">
	</div>

	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>	