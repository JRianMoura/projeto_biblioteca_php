<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca Nacional</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="book.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Biblioteca Nacional </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Categoria
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="?page=categoria-listar">Listar</a></li>
							<li><a class="dropdown-item" href="?page=categoria-cadastrar">Cadastrar</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Livro
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="?page=livro-listar">Listar</a></li>
							<li><a class="dropdown-item" href="?page=livro-cadastrar">Cadastrar</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Atendente
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="?page=atendente-listar">Listar</a></li>
							<li><a class="dropdown-item" href="?page=atendente-cadastrar">Cadastrar</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Usuário
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="?page=usuario-listar">Listar</a></li>
							<li><a class="dropdown-item" href="?page=usuario-cadastrar">Cadastrar</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							aria-expanded="false">
							Empréstimo
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="?page=emprestimo-listar">Listar</a></li>
							<li><a class="dropdown-item" href="?page=emprestimo-cadastrar">Cadastrar</a></li>
						</ul>
					</li>
				</ul>
				<form class="d-flex" role="search">
					<input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Pesquisar</button>
				</form>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col">
				<?php
				//conexao com o banco de dados
				include('config.php');

				//include das páginas
				switch (@$_REQUEST['page']) {
					//categoria
					case 'categoria-listar':
						include('categoria-listar.php');
						break;
					case 'categoria-cadastrar':
						include('categoria-cadastrar.php');
						break;
					case 'categoria-editar':
						include('categoria-editar.php');
						break;
					case 'categoria-salvar':
						include('categoria-salvar.php');
						break;

					//livro
					case 'livro-listar':
						include('livro-listar.php');
						break;
					case 'livro-cadastrar':
						include('livro-cadastrar.php');
						break;
					case 'livro-editar':
						include('livro-editar.php');
						break;
					case 'livro-salvar':
						include('livro-salvar.php');
						break;

					//atendente
					case 'atendente-listar':
						include('atendente-listar.php');
						break;
					case 'atendente-cadastrar':
						include('atendente-cadastrar.php');
						break;
					case 'atendente-editar':
						include('atendente-editar.php');
						break;
					case 'atendente-salvar':
						include('atendente-salvar.php');
						break;

					//usuario
					case 'usuario-listar':
						include('usuario-listar.php');
						break;
					case 'usuario-cadastrar':
						include('usuario-cadastrar.php');
						break;
					case 'usuario-editar':
						include('usuario-editar.php');
						break;
					case 'usuario-salvar':
						include('usuario-salvar.php');
						break;

					//emprestimo
					case 'emprestimo-listar':
						include('emprestimo-listar.php');
						break;
					case 'emprestimo-cadastrar':
						include('emprestimo-cadastrar.php');
						break;
					case 'emprestimo-editar':
						include('emprestimo-editar.php');
						break;
					case 'emprestimo-salvar':
						include('emprestimo-salvar.php');
						break;

					default:
						print "<h1>Bem vindo a Biblioteca Nacional</h1>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>