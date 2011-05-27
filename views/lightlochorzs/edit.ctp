<div class="lightlochorzs form">
<?php echo $form->create('Lightlochorz');?>
	<fieldset>
 		<legend><?php __('Edit Lightlochorz');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Lightlochorz.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Lightlochorz.id'))); ?></li>
		<li><?php echo $html->link(__('List Lightlochorzs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
