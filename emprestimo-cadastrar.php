<h1>Cadastrar Empréstimo</h1>
<form action="?page=emprestimo-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Usuario</label>
		<select name="usuario_id_usuario" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM usuario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_usuario."'>".$row->nome_usuario."</option>";
					}
				}else{
					print "<option>Não há usuários</option>";
				}
			?>
		</select>
        <div class="mb-3">
		<label>Atendente</label>
		<select name="funcionario_id_funcionario" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM funcionario";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
					}
				}else{
					print "<option>Não há funcionários</option>";
				}
			?>
		</select>        	
	<div class="mb-3">
		<label>Livro</label>
		<select name="livro_id_livro" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM livro";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->id_livro."'>".$row->titulo_livro."</option>";
					}
				}else{
					print "<option>Não há livros</option>";
				}
			?>
		</select>       
	</div>
	<div class="mb-3">
		<label>Data do Empréstimo</label>
		<input type="date" name="data_emprestimo" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data da Devolução</label>
		<input type="date" name="data_devolucao" class="form-control">
	</div>
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>