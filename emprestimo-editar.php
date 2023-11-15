<h1>Editar Empréstimo</h1>
<?php
	$sql_1 = "SELECT * 
	FROM emprestimo 
	WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];

	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>			
<form action="?page=emprestimo-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_emprestimo" value="<?php print $row_1->id_emprestimo; ?>">

	<div class="mb-3">
		<label>Nome do Usuário</label>
		<select name="usuario_id_usuario" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM usuario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->usuario_id_usuario == $row->id_usuario){
							print "<option value='".$row->id_usuario."' selected>".$row->nome_usuario."</option>";
						}else{
							print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
						}
					}
				}else{
					print "<option>Não há categorias</option>";
				}
			?>
		</select>
        <div class="mb-3">
		<label>Nome do Atendente</label>
		<select name="funcionario_id_funcionario" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM funcionario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->funcionario_id_funcionario == $row->id_funcionario){
							print "<option value='".$row->id_funcionario."' selected>".$row->nome_funcionario."</option>";
						}else{
							print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
						}
					}
				}else{
					print "<option>Não há categorias</option>";
				}
			?>
		</select>
        <div class="mb-3">
		<label>Título do Livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM livro";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->livro_id_livro == $row->id_livro){
							print "<option value='".$row->id_livro."' selected>".$row->titulo_livro."</option>";
						}else{
							print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
						}
					}
				}else{
					print "<option>Não há categorias</option>";
				}
			?>
		</select>
	<div class="mb-3">
		<label>Data do Empréstimo</label>
		<input type="date" value="<?php print $row_1->data_emprestimo; ?>" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data da Devolução</label>
		<input type="date" value="<?php print $row_1->data_devolucao; ?>" name="data_devolucao" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>