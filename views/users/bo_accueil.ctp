<?php 
	echo '<div class="soundpatches view">';
	echo '<h2>Accueil</h2>';
	echo 	'Bienvenue <B>'.$Username.'</B> dans le backoffice';
	echo 	'<br/><br/>';
	echo 	$Username.' fait partie du groupe : '.$Id.' et son flag admin est à : '.$IsAdmin;
	echo 	'<br/>';
	echo '</div>';
?>

	<div class="actions">
          <ul>
                <li><?php echo $html->link(__('Mes infos', true), array('controller' => 'users', 'action' => 'edit/'.$Id)); ?> </li>
                <li><?php echo $html->link(__('Fiche technique', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Contact', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>

		<?php if ($IsAdmin){ echo '                  <li>'.$html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin')).'</li>';}?>
		<BR>
                <li><?php echo $html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	  </ul>
	</div>

