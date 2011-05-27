<div class="marques form">
<?php echo $form->create('Marque');?>
	<fieldset>
 		<legend><?php __('Edit Marque');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
		echo $form->input('public');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Marque.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Marque.id'))); ?></li>
		<li><?php echo $html->link(__('List Marques', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
	</ul>
</div>
