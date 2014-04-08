<h2>Modify existing article</h2>
<?php echo $this->Form->create('Article', array('type'=>'post'));?>
<?php echo $this->Form->input('title');?>
<?php echo $this->Form->text('body');?>
<?php echo $this->Form->end('Save');?>
