<h2>Add User</h2>
<?php echo $this->Form->create('User', array('type'=>'post'));?>
<?php echo $this->Form->input('email');?>
<?php echo $this->Form->input('password');?>
<?php echo $this->Form->end('Save');?>
