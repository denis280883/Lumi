<div class="page-header">
	<h1>Editer un article</h1>
</div>

<form action="<?php echo Router::url('admin/posts/edit'); ?>">
	<div class="clearfix">
		<label for="inputTitre">Titre</label>
		<div class="input">
			<input type="text" id="inputTitre" name="name" value="<?php echo $post->name; ?>">
		</div>
	</div>
</form>