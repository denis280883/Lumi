<div class="page-header">
	<h1>Editer un article</h1>
</div>

<form action="<?php echo Router::url('admin/posts/edit'); ?>" method="post">
	<?php echo $this->Form->input('name', 'titre') ?>
	<?php echo $this->Form->input('slug', 'url') ?>
	<?php echo $this->Form->input('id', 'hidden'); ?>
	<?php echo $this->Form->input('content', 'Contenu',array('type'=>'textarea','class'=>'xxlarge','rows'=>5)); ?>
	<?php echo $this->Form->input('online', 'En ligne',array('type'=>'checkbox')); ?>
	<div class="action">
		<input type="submit" class="btn primary" value="Envoyer">

	</div>
</form>