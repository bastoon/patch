<div class="wedgelochorzs form">
<?php echo $form->create('Wedgelochorz');?>
	<fieldset>
 		<legend><?php __('Edit Wedgelochorz');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Wedgelochorz.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Wedgelochorz.id'))); ?></li>
		<li><?php echo $html->link(__('List Wedgelochorzs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
