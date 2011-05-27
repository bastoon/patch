<div class="tmicros form">
<?php echo $form->create('Tmicro');?>
	<fieldset>
 		<legend><?php __('Edit Tmicro');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Tmicro.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Tmicro.id'))); ?></li>
		<li><?php echo $html->link(__('List Tmicros', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
	</ul>
</div>
