<div class="micros form">
<?php echo $form->create('Micro');?>
	<fieldset>
 		<legend><?php __('Add Micro');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('marque_id');
		echo $form->input('tmicro_id');
		echo $form->input('title');
		echo $form->input('remarque');
		echo $form->input('usage');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Micros', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Marques', true), array('controller' => 'marques', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Marque', true), array('controller' => 'marques', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tmicros', true), array('controller' => 'tmicros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tmicro', true), array('controller' => 'tmicros', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
