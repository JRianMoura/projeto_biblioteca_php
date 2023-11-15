<h1>Listar Empréstimo</h1>
<?php

    $sql ="SELECT usuario.nome_usuario, 
	livro.titulo_livro, 
	funcionario.nome_funcionario,
	id_emprestimo,
	data_emprestimo,
	data_devolucao
	FROM emprestimo 
	JOIN usuario ON emprestimo.usuario_id_usuario = usuario.id_usuario 
	JOIN livro ON emprestimo.livro_id_livro = livro.id_livro 
	JOIN funcionario ON emprestimo.funcionario_id_funcionario = funcionario.id_funcionario";


$res = $conn->query($sql);
$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Usuário</th>";
        print "<th>Funcionário</th>";
		print "<th>Livro</th>";
		print "<th>Data do Empréstimo</th>";
		print "<th>Data da Devolução</th>";
        print "<th>Ações</th>";
		print "</tr>";
        
		while($row = $res->fetch_object()){	
			print "<tr>";
			print "<td>".$row->id_emprestimo."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->data_emprestimo."</td>";
			print "<td>".$row->data_devolucao."</td>";
			print "<td>
					<button onclick=\"location.href='?page=emprestimo-editar&id_emprestimo=".$row->id_emprestimo."';\" class='btn btn-success'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=emprestimo-salvar&acao=excluir&id_emprestimo=".$row->id_emprestimo."';}else{false;}\" class='btn btn-danger'>Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}