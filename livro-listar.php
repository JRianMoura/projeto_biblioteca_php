<h1>Listar Livro</h1>
<?php
	$sql = "SELECT * FROM livro AS l
			INNER JOIN categoria AS c
			ON l.categoria_id_categoria = c.id_categoria";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Categoria</th>";
		print "<th>Título</th>";
		print "<th>Autor</th>";
		print "<th>Editora</th>";
		print "<th>Edição</th>";
		print "<th>Localidade</th>";
		print "<th>Ano</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){	
			print "<tr>";
			print "<td>".$row->id_livro."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->autor_livro."</td>";
			print "<td>".$row->editora_livro."</td>";
			print "<td>".$row->edicao_livro."</td>";
			print "<td>".$row->localidade_livro."</td>";
			print "<td>".$row->ano_livro."</td>";
			print "<td>
						<button onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."';\" class='btn btn-success'>Editar</button>

						<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."';}else{false;}\" class='btn btn-danger'>Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
