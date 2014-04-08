<h2>
	All articles
</h2>
<ul>
	<?php foreach($articles as $article):?>
		<li>
			<a href="<?php echo $this->Html->url(array('action'=>'view', $article['Article']['id']));?>">
				<?php echo $article['Article']['title'];?>
			</a>
		</li>
	<?php endforeach;?>
</ul>
<p>
	<a href="<?php echo $this->Html->url(array('action'=>'add'));?>">
		post new article
	</a>
</p>
<?php debug($articles);?>