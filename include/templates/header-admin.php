<!DOCTYPE html>

<html>
	<head>
		<title><?php theTitle(); ?></title>
		<base href="http://localhost/">
		<meta charset="utf-8">
		<meta author="Thiago Santos">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<script src="js/jquery.js"></script>
		<script src="js/popper.js"></script>
		<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="js/ckeditor/styles.js"></script>


		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/bootstrap.js"></script>
		<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	</head>
	<body>
		<div class="container-fluid border border-dark ">

			<div class="row">
	    		<nav class="navbar navbar-expand-lg navbar-dark bg-danger col-12">
					<a class="navbar-brand" href = "https://www.vortexsoftware.com.br/"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarvtx">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarvtx">
						<ul class="navbar-nav">
							<li class="nav-item active" ><a class="nav-link" href="admin/index.php">Início</a></li>
							<li class="nav-item" ><a class="nav-link" href="admin/page.php">Páginas</a></li>
							<li class="nav-item" ><a class="nav-link" href="admin/apps.php">Aplicativos</a></li>
							<li class="nav-item" ><a class="nav-link" href="admin/article.php">Artigos</a></li>
							<li class="nav-item" ><a class="nav-link" href="admin/users.php">Usuários</a></li>
							<li class="nav-item" ><a class="nav-link" href="admin/logout.php">Sair</a></li>
						</ul>
		    		</div>
				</nav>
			</div>
		</div>