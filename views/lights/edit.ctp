<div class="lights form">
<?php echo $form->create('Light');?>
	<fieldset>
 		<legend><?php __('Edit Light');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('tlight_id');
		echo $form->input('user_id');
		echo $form->input('public');
		echo $form->input('lightloc_id');
		echo $form->input('lightcolor_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Light.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Light.id'))); ?></li>
		<li><?php echo $html->link(__('List Lights', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Tlights', true), array('controller' => 'tlights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlight', true), array('controller' => 'tlights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightcolors', true), array('controller' => 'lightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightcolor', true), array('controller' => 'lightcolors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Channels', true), array('controller' => 'channels', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Channel', true), array('controller' => 'channels', 'action' => 'add')); ?> </li>
	</ul>
</div>
