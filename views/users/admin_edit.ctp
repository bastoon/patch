<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit User');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('groupe_id');
		echo $form->input('actif');
		echo $form->input('published');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Instruments', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Instrument', true), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightpatches', true), array('controller' => 'lightpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightpatch', true), array('controller' => 'lightpatches', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Marques', true), array('controller' => 'marques', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Marque', true), array('controller' => 'marques', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stageplans', true), array('controller' => 'stageplans', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tcontacts', true), array('controller' => 'tcontacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tcontact', true), array('controller' => 'tcontacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Teffects', true), array('controller' => 'teffects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teffect', true), array('controller' => 'teffects', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tinserts', true), array('controller' => 'tinserts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tinsert', true), array('controller' => 'tinserts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tlightcolors', true), array('controller' => 'tlightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlightcolor', true), array('controller' => 'tlightcolors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tlights', true), array('controller' => 'tlights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlight', true), array('controller' => 'tlights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
	</ul>
</div>
