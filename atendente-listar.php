<h1>Listar Atendente</h1>
<?php
	$sql = "SELECT * FROM funcionario";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Funcionario</th>";
		print "<th>CPF</th>";
		print "<th>Email</th>";
		print "<th>Número</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_funcionario."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->cpf_funcionario."</td>";
			print "<td>".$row->email_funcionario."</td>";
			print "<td>".$row->fone_funcionario."</td>";
			print "<td>
						<button onclick=\"location.href='?page=atendente-editar&id_funcionario=".$row->id_funcionario."';\" class='btn btn-success'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=atendente-salvar&acao=excluir&id_funcionario=".$row->id_funcionario."';}else{false;}\" class='btn btn-danger'>Excluir</button>
			        </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}