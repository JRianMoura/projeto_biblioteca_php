<h1>Listar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Usuario</th>";
		print "<th>CPF do Usuario</th>";
		print "<th>E-mail do Usuario</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Telefone</th>";
		print "<th>Ações</th>";
		print "</tr>";
		
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->cpf_usuario."</td>";
			print "<td>".$row->email_usuario."</td>";
			print "<td>".$row->data_nasc_usuario."</td>";
			print "<td>".$row->fone_usuario."</td>";
			print "<td>
						<button onclick=\"location.href='?page=usuario-editar&id_usuario=".$row->id_usuario."';\" class='btn btn-success'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=usuario-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
    ?>