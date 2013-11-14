<table>
<tr>
	<th>Post title</th>
	<th>Post body</th>
	<th>Actions</th>
</tr>
<?php
	echo '<td>' . $post['Post']['title'] . '</td>';
	echo '<td>' . $post['Post']['body'] . '</td>';
	echo '<td>' . $this->Html->link('Edit', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']))."|". $this->Html->link('Delete', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])) . '</td>';
?>	

</table>