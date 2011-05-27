<div class="lightpatches form">
<?php echo $form->create('Lightpatch');?>
	<fieldset>
 		<legend><?php __('Edit Lightpatch');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
		echo $form->input('published');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Lightpatch.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Lightpatch.id'))); ?></li>
		<li><?php echo $html->link(__('List Lightpatches', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Channels', true), array('controller' => 'channels', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Channel', true), array('controller' => 'channels', 'action' => 'add')); ?> </li>
	</ul>
</div>
