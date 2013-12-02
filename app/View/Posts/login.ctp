<div id= "loginForm">
<?php
	echo $this->Form->create('User');
	echo $this->Form->input('User.username');
	echo $this->Form->input('User.password');
	echo $this->Form->end(_('Login'));
	
?>
</div>