<div class="page-header">
	<h1>Le blog</h1>
</div>

<?php foreach ($posts as $k => $v): ?>
	<h2><?php echo $v->name; ?></h2>
	<?php echo $v->content; ?>
	<p><a href="<?php echo BASE_URL.'/posts/view/'.$v->id; ?>">Lire la suite &rarr;</a></p>
<?php endforeach ?>

<div class="pagination">
  <ul>
  <?php for ($i=1 ; $i <= $page; $i++): ?>
    <li><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

  <?php endfor; ?>
  </ul> 	


</div>