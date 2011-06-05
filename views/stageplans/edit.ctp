<div class="stageplans form">
<?php echo $form->create('Stageplan');?>
	<fieldset>
 		<legend><?php __('Edit Stageplan');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
		echo $form->input('soundpatch_id');
		echo $form->input('published');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Stageplan.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Stageplan.id'))); ?></li>
		<li><?php echo $html->link(__('List Stageplans', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
