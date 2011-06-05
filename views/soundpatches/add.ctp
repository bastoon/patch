<div class="soundpatches form">
<?php echo $form->create('Soundpatch');?>
	<fieldset>
 		<legend><?php __('Add Soundpatch');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('published');
		echo $form->input('wedge_id');
		echo $form->input('title');
		echo $form->input('note');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Soundpatches', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stageplans', true), array('controller' => 'stageplans', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
