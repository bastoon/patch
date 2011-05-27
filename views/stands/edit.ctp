<div class="stands form">
<?php echo $form->create('Stand');?>
	<fieldset>
 		<legend><?php __('Edit Stand');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Stand.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Stand.id'))); ?></li>
		<li><?php echo $html->link(__('List Stands', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
