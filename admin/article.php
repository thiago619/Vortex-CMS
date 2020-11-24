<?php

require_once 'restrito.php';

getHeader(true);
?>

<div class="container mt-5">
	<a class="btn btn-danger">Criar Artigo</a>

</div>

<div class="container mt-5">
	<table class="table">

		<thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">Título</th>
				<th scope="col">Slug</th>
				<th scope="col" colspan="2">Ação</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>0000000001</td>
				<td>Home</td>
				<td>home</td>
				<td><a href="#">editar</a></td>
				<td><a href="#">excluir</a></td>
			</tr>
		</tbody>


	</table>


</div>

<?php

getFooter();
?>




