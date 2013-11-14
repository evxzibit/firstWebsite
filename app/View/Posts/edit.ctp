<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body'); 
	echo $this->Form->input('id',array('type' => 'hidden'));
	echo $this->Form->end('Update Post');
	
	
?>	