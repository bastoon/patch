<div class="wedgelocrotations form">
<?php echo $form->create('Wedgelocrotation');?>
	<fieldset>
 		<legend><?php __('Add Wedgelocrotation');?></legend>
	<?php
		echo $form->input('title');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Wedgelocrotations', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
