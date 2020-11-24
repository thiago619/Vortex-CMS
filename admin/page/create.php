<?php

require_once '../restrito.php';

getHeader(true);
?>

<div class="container mt-5">
	
	<form>
		<div class="form-group">
			<label for="title">Título</label>
			<input type="text" name="title" id="title" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="slug">Slug</label>
			<input type="text" name="slug" id="slug" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="desc">Descrição</label>
			<input type="text" name="desc" id="desc" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="tags">Tags</label>
			<input type="text" name="tags" id="tags" class="form-control"/>
		</div>

		<div class="form-group">
			<label for="content">Conteúdo</label>
			<textarea name="content" id="content" class="form-control"></textarea>

		</div>
		<button class="btn btn-lg btn-danger btn-block" type="submit">Criar Página</button>


	</form>
</div>

<script type="text/javascript">

	CKEDITOR.replace("content");

</script>


<?php getFooter(); ?>