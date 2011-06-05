<div class="miclocverts form">
<?php echo $form->create('Miclocvert');?>
	<fieldset>
 		<legend><?php __('Edit Miclocvert');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Miclocvert.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Miclocvert.id'))); ?></li>
		<li><?php echo $html->link(__('List Miclocverts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
