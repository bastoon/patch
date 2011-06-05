<div class="lightlocverts form">
<?php echo $form->create('Lightlocvert');?>
	<fieldset>
 		<legend><?php __('Add Lightlocvert');?></legend>
	<?php
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Lightlocverts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
