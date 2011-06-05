<div class="tracks form">
<?php echo $form->create('Track');?>
	<fieldset>
 		<legend><?php __('Add Track');?></legend>
	<?php
		echo $form->input('rank');
		echo $form->input('contact_id');
		echo $form->input('soundpatch_id');
		echo $form->input('instrument_id');
		echo $form->input('micro_id');
		echo $form->input('tinsert_id');
		echo $form->input('teffect_id');
		echo $form->input('stand_id');
		echo $form->input('micloc_id');
		echo $form->input('note');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Tracks', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Instruments', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Instrument', true), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tinserts', true), array('controller' => 'tinserts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tinsert', true), array('controller' => 'tinserts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Teffects', true), array('controller' => 'teffects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teffect', true), array('controller' => 'teffects', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stands', true), array('controller' => 'stands', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stand', true), array('controller' => 'stands', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
