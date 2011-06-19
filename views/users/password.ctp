<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Mes infos');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('password', array('label'=>'Mot de passe', 'value' => ''));
	?>
	</fieldset>
<?php echo $form->end('Valider');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>
		<li><?php echo $html->link(__('Fiche technique', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('Contact', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
	</ul>
</div>
