<div class="lightlocs form">
<?php echo $form->create('Lightloc');?>
	<fieldset>
 		<legend><?php __('Edit Lightloc');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('lightlochorz_id');
		echo $form->input('lightlocvert_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Lightloc.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Lightloc.id'))); ?></li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Lightlochorzs', true), array('controller' => 'lightlochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlochorz', true), array('controller' => 'lightlochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlocverts', true), array('controller' => 'lightlocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlocvert', true), array('controller' => 'lightlocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
