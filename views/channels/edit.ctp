<div class="channels form">
<?php echo $form->create('Channel');?>
	<fieldset>
 		<legend><?php __('Edit Channel');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('rank');
		echo $form->input('light_id');
		echo $form->input('lightpatch_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Channel.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Channel.id'))); ?></li>
		<li><?php echo $html->link(__('List Channels', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightpatches', true), array('controller' => 'lightpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightpatch', true), array('controller' => 'lightpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
