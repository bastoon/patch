<div class="tracks form">
<?php echo $form->create('Track');?>
	<fieldset>
 		<legend><?php __('Edit Track');?></legend>
	<?php
		echo "\n<table>\n";
		echo $form->input('id');
		echo $form->hidden('rank');
		echo $form->hidden('micloc_id');
		echo $form->hidden('soundpatch_id');
		echo "\n<TR><TH COLSPAN=3>\n";
		echo $form->input('contact_id');
		echo "\n</TH></TR><TR><TD>\n";
		echo $form->input('instrument_id');
		echo "\n</TD><TD>\n";
		echo $form->input('micro_id');
		echo "\n</TD><TD>\n";
		echo $form->input('stand_id');
		echo "\n</TD></TR><TR><TD>\n";
		echo "&nbsp;";
		echo "\n</TD><TD>\n";
		echo $form->input('tinsert_id');
		echo "\n</TD><TD>\n";
		echo $form->input('teffect_id');
		echo "\n</TD></TR><TR><TD COLSPAN=3>\n";
		echo $form->input('note');
		echo "\n</TD></TR>\n";
		echo "</table>";
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>
                <li><?php echo $html->link(__('Fiche technique', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Contact', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>

		<li><?php //echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Track.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Track.id'))); ?></li>
		<li><?php //echo $html->link(__('List Tracks', true), array('action' => 'index'));?></li>
		<li><?php //echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Instruments', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Instrument', true), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Tinserts', true), array('controller' => 'tinserts', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Tinsert', true), array('controller' => 'tinserts', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Teffects', true), array('controller' => 'teffects', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Teffect', true), array('controller' => 'teffects', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Stands', true), array('controller' => 'stands', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Stand', true), array('controller' => 'stands', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
