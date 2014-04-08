<h2>Post new article</h2>
<?php echo $this->Form->create('Article', array('type'=>'post'));?>
<?php echo $this->Form->label('title', 'Title');?>
<?php echo $this->Form->text('title');?>
<?php echo $this->Form->label('body', 'Body');?>
<?php echo $this->Form->textarea('body');?>
<?php echo $this->Form->end('Save');?>
