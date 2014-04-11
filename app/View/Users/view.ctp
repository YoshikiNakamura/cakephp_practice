<h2>
	<?php echo $user['User']['email'];?>
</h2>
<h3>
	Information
</h3>
<dl>
	<dt>
		ID
	</dt>
	<dd>
		<?php echo $user['User']['id'];?>
	</dd>
	<dt>
		E-mail
	</dt>
	<dd>
		<?php echo $user['User']['email'];?>
	</dd>
	<dt>
		Created
	</dt>
	<dd>
		<?php echo $user['User']['created'];?>
	</dd>
	<dt>
		Updated
	</dt>
	<dd>
		<?php echo $user['User']['updated'];?>
	</dd>
</dl>
<h3>
	Action
</h3>
<ul>
	<li>
		<a href="<?php echo $this->Html->url(array('action'=>'edit', $user['User']['id']));?>">
			modify
		</a>
	</li>
	<li>
		<a href="<?php echo $this->Html->url(array('action'=>'delete', $user['User']['id']));?>">
			delete
		</a>
	</li>
</ul>
<?php debug($user);?>