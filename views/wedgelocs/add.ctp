<div class="wedgelocs form">
<?php echo $form->create('Wedgeloc');?>
	<fieldset>
 		<legend><?php __('Add Wedgeloc');?></legend>
	<?php
		echo $form->input('wedgelochorz_id');
		echo $form->input('wedgelocvert_id');
		echo $form->input('wedgelocrotation_id');
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Wedgelochorzs', true), array('controller' => 'wedgelochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelochorz', true), array('controller' => 'wedgelochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocverts', true), array('controller' => 'wedgelocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocvert', true), array('controller' => 'wedgelocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocrotations', true), array('controller' => 'wedgelocrotations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocrotation', true), array('controller' => 'wedgelocrotations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
	</ul>
</div>
