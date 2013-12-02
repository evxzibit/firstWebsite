<div class= "posts index">
<h1><?php echo __('List of all posts'); ?></h1>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort('id'); ?></th>
	<th><?php echo $this->Paginator->sort('Tiltle'); ?></th>
	<th>Actions</th>
</tr>
<?php
	foreach ($allPosts as $post){
		echo '<tr>';
		echo '<td>' . h($post['Post']['id']) . '</td>';
		echo '<td>' . h($post['Post']['title']) . '</td>';
		echo '<td  class="actions">' . $this->Html->link('View', array('controller'=> 'posts', 'action' => 'view', $post['Post']['id'] ) ) . "|" . $this->Html->link('Edit', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']))."|". $this->Html->link('Delete', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id'])) . '</td>';		
		echo '</tr>';
	}
?>	
</table>
<p>
<?php
echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
?></p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>	
	</div>
</div>	
<div  class="actions">
<h3><?php echo __('Actions'); ?></h3>
	<ul>
<?php
	echo '<li>'.$this->Html->link('Add post', array('controller' => 'posts', 'action' => 'add')).'</li>';
	echo '<li>'.$this->Html->link('List users', array('controller' => 'users', 'action' => 'index')).'</li>';
	echo '<li>'.$this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')).'</li>';
?>
	</ul>
</div>