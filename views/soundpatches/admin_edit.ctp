<div class="soundpatches form">
<?php echo $form->create('Soundpatch');?>
	<fieldset>
 		<legend><?php __('Edit Soundpatch');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('user_id');
	//	echo $form->input('published');
	//	echo $form->input('wedge_id');
		echo $form->input('title');
		echo $form->input('note');
	?>
	</fieldset>
<?php echo $form->end('Modifier');?>
</div>
<div class="actions">
	<ul>
		<li><?php //echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Soundpatch.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Soundpatch.id'))); ?></li>
		<li><?php //echo $html->link(__('List Soundpatches', true), array('action' => 'index'));?></li>
		<li><?php //echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Stageplans', true), array('controller' => 'stageplans', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
