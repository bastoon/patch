<div class="miclochorzs form">
<?php echo $form->create('Miclochorz');?>
	<fieldset>
 		<legend><?php __('Edit Miclochorz');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Miclochorz.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Miclochorz.id'))); ?></li>
		<li><?php echo $html->link(__('List Miclochorzs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
