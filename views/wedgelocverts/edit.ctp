<div class="wedgelocverts form">
<?php echo $form->create('Wedgelocvert');?>
	<fieldset>
 		<legend><?php __('Edit Wedgelocvert');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Wedgelocvert.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Wedgelocvert.id'))); ?></li>
		<li><?php echo $html->link(__('List Wedgelocverts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
