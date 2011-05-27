<div class="instruments form">
<?php echo $form->create('Instrument');?>
	<fieldset>
 		<legend><?php __('Edit Instrument');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
		echo $form->input('public');
		echo $form->input('title');
		echo $form->input('symbol');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Instrument.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Instrument.id'))); ?></li>
		<li><?php echo $html->link(__('List Instruments', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
