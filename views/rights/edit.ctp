<div class="rights form">
<?php echo $form->create('Right');?>
	<fieldset>
 		<legend><?php __('Edit Right');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('groupe_id');
		echo $form->input('controller');
		echo $form->input('action');
		echo $form->input('autorise');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Right.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Right.id'))); ?></li>
		<li><?php echo $html->link(__('List Rights', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
	</ul>
</div>
