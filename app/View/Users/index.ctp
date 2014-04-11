<h2>
	All users
</h2>
<ul>
	<li>
		<a href="<?php echo $this->Html->url(array('action'=>'add'));?>">
			add new user &gt;&gt;
		</a>
	</li>
	<?php foreach($users as $user):?>
		<li>
			<a href="<?php echo $this->Html->url(array('action'=>'view', $user['User']['id']));?>">
				<?php echo $user['User']['email'];?>
			</a>
		</li>
	<?php endforeach;?>
</ul>
<?php debug($users);?>