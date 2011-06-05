<div class="tlightcolors form">
<?php echo $form->create('Tlightcolor');?>
	<fieldset>
 		<legend><?php __('Edit Tlightcolor');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Tlightcolor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Tlightcolor.id'))); ?></li>
		<li><?php echo $html->link(__('List Tlightcolors', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightcolors', true), array('controller' => 'lightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightcolor', true), array('controller' => 'lightcolors', 'action' => 'add')); ?> </li>
	</ul>
</div>
