<h1>List of all posts</h1>
<table>
<tr>
	<th>Tiltle</th>
	<th>Actions</th>
</tr>
<?php
	foreach ($allPosts as $post){
		echo '<tr>';
		echo '<td>' . $post['Post']['title'] . '</td>';
		echo '<td>' . $this->Html->link('View', array('controller'=> 'posts', 'action' => 'view', $post['Post']['id'] ) ) . "|" . $this->Html->link('Edit', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']))."|". $this->Html->link('Delete', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])) . '</td>';		
		echo '</tr>';
	}
?>	
</table>
<div>
<?php
	echo $this->Html->link('Add post', array('controller' => 'posts', 'action' => 'add'));
?>
</div>