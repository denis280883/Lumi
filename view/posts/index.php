<?php foreach ($posts as $k => $v): ?>
	<div class="page-header">
		<h1><?php echo $v->name; ?></h1>
		<?php echo $v->content; ?>
	</div>
<?php endforeach ?>