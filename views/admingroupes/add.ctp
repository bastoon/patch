<div class="groupes form">
<?php echo $form->create('Groupe');?>
	<fieldset>
 		<legend><?php __('Add Groupe');?></legend>
	<?php
		echo $form->input('admin');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Groupes', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Rights', true), array('controller' => 'rights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Right', true), array('controller' => 'rights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
