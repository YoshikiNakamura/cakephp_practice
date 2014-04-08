<h2>
	<?php echo $article['Article']['title']?>
</h2>
<p>
	<?php echo $article['Article']['body']?>
	<br>
	posted by
	<a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'view', $article['User']['id']));?>">
		<?php echo $article['User']['email']?>
	</a>
</p>
<?php debug($article);?>