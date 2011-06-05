<div class="miclocs form">
<?php echo $form->create('Micloc');?>
	<fieldset>
 		<legend><?php __('Edit Micloc');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('miclochorz_id');
		echo $form->input('miclocvert_id');
		echo $form->input('logo_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Micloc.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Micloc.id'))); ?></li>
		<li><?php echo $html->link(__('List Miclocs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Miclochorzs', true), array('controller' => 'miclochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Miclochorz', true), array('controller' => 'miclochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Miclocverts', true), array('controller' => 'miclocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Miclocvert', true), array('controller' => 'miclocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Logos', true), array('controller' => 'logos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Logo', true), array('controller' => 'logos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
