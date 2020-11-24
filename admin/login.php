<?php



require_once 'admin.php';

getHeader();
?>

  <body class="text-center">
  	<div class="container mt-5">
  		<div class="row justify-content-center">
		    <form action = "admin/processa.php" method="post">
		      <img class="mb-4" src="favicon.png" alt="" width="80" height="80">
		      <h1 class="h3 mb-3 font-weight-normal">Área de Membros</h1>
		      <label for="usuario" class="sr-only">usuario</label>
		      <input type="text" id="usuario" name="usuario" class="form-control mb-2" placeholder="Usuário" required autofocus>
		      <label for="senha" class="sr-only">senha</label>
		      <input type="password" id="senha" name="senha" class="form-control mb-2" placeholder="Senha" required>
		      <button class="btn btn-lg btn-danger btn-block" type="submit">Entrar</button>
		    </form>
		</div>
	</div>
  </body>

<?php
getFooter();
?>