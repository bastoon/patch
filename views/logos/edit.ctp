<div class="logos form">
<?php echo $form->create('Logo');?>
	<fieldset>
 		<legend><?php __('Edit Logo');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('path');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Logo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Logo.id'))); ?></li>
		<li><?php echo $html->link(__('List Logos', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
