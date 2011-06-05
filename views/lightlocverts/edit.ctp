<div class="lightlocverts form">
<?php echo $form->create('Lightlocvert');?>
	<fieldset>
 		<legend><?php __('Edit Lightlocvert');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Lightlocvert.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Lightlocvert.id'))); ?></li>
		<li><?php echo $html->link(__('List Lightlocverts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
