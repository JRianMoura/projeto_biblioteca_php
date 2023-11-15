<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar': 
            // 				
			$sql = "INSERT INTO emprestimo (	
						usuario_id_usuario,
						funcionario_id_funcionario,
						livro_id_livro,
						data_emprestimo,
						data_devolucao
					) VALUES (
						".$_POST['usuario_id_usuario'].",
						".$_POST['funcionario_id_funcionario'].",
						".$_POST['livro_id_livro'].",
						'".$_POST['data_emprestimo']."',
						'".$_POST['data_devolucao']."'
					)";


// 					INSERT INTO emprestimo (coluna1, coluna2, coluna3, ...)
// VALUES (valor1, valor2, valor3, ...);


				$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='?page=emprestimo-listar';</script>";
				}else{
					print "<script>alert('Não foi possível');</script>";
					print "<script>location.href='?page=emprestimo-listar';</script>";
				}
			break;
		
		case 'editar':
			$sql = "UPDATE emprestimo SET
						usuario_id_usuario=".$_POST['usuario_id_usuario'].",
						funcionario_id_funcionario=".$_POST['funcionario_id_funcionario'].",
						livro_id_livro=".$_POST['livro_id_livro'].",
						data_emprestimo='".$_POST['data_emprestimo']."',
						data_devolucao='".$_POST['data_devolucao']."'
					WHERE
                        id_emprestimo=".$_POST['id_emprestimo'];

			$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Editou com sucesso!');</script>";
					print "<script>location.href='?page=emprestimo-listar';</script>";
				}else{
					print "<script>alert('Não foi possível');</script>";
					print "<script>location.href='?page=emprestimo-listar';</script>";
				}
			break;

		case 'excluir':
			$sql = "DELETE FROM emprestimo WHERE id_emprestimo=".$_REQUEST['id_emprestimo'];

			$res = $conn->query($sql);

				if($res==true){
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='?page=emprestimo-listar';</script>";
				}else{
					print "<script>alert('Não foi possível');</script>";
					print "<script>location.href='?page=emprestimo-listar';</script>";
				}
			break;
	}