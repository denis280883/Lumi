<div class="pages-header">
	<h1>Zone réservé</h1>	
</div>	
	<form action= "<?php echo Router::url('users/login'); ?>" method="post">
		<?php  echo $this->Form->input('login', 'Identifiant'); ?>
		<?php  echo $this->Form->input('password', 'Mot de passe',array('type'=>'password')); ?>
	</form>
