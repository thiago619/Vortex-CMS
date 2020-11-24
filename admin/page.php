<?php

require_once 'restrito.php';

getHeader(true);

$pm = PageManager::getInstance();
?>

<div class="container mt-5">
	<a class="btn btn-danger" href="admin/page/create.php">Criar página</a>

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
			<?php
				$pages = $pm::getAllPages();
				foreach ($pages as $infopage)
			{
				echo '<tr>';
				echo "<td>". $infopage['ID'] ."</td>";
				echo "<td>". $infopage['title'] ."</td>";
				echo "<td>". $infopage['slug'] ."</td>";
				echo '<td><a href="#">editar</a></td>';
				echo '<td><a href="#">excluir</a></td>';
				echo '</tr>';
			}

?>
			
		</tbody>


	</table>


</div>


<?php

getFooter();
?>