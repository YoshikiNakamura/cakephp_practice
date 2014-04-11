<h2>Edit User</h2>
<?php echo $this->Form->create('User', array('type'=>'put'));?>
<?php echo $this->Form->input('id', array('type' => 'hidden'));?>
<?php echo $this->Form->input('email');?>
<?php echo $this->Form->input('password');?>
<?php echo $this->Form->end('Save');?>
