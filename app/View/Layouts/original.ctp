<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header id="header">
			<h1>Sample<?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			<a href="<?php echo $this->Html->url(array('controller'=>'articles', 'action'=>'index'));?>">
				all articles
			</a>
			|
			<a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'index'));?>">
				all users
			</a>
			|
			<a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'login'));?>">
				login
			</a>
			|
			<a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'logout'));?>">
				logout
			</a>
		</header>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer">
			<?php /*echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);*/
			?>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
