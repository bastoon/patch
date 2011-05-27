<div class="contacts form">
<?php echo $form->create('Contact');?>
	<fieldset>
 		<legend><?php __('Edit Contact');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('tcontact_id');
		echo $form->input('user_id');
		echo $form->input('published');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('phone');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Contact.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Contact.id'))); ?></li>
		<li><?php echo $html->link(__('List Contacts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Tcontacts', true), array('controller' => 'tcontacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tcontact', true), array('controller' => 'tcontacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
