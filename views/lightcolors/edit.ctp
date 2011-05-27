<div class="lightcolors form">
<?php echo $form->create('Lightcolor');?>
	<fieldset>
 		<legend><?php __('Edit Lightcolor');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('tlightcolor_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Lightcolor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Lightcolor.id'))); ?></li>
		<li><?php echo $html->link(__('List Lightcolors', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Tlightcolors', true), array('controller' => 'tlightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlightcolor', true), array('controller' => 'tlightcolors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
