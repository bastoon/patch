<div class="soundpatches view">
	<h2><?php __('Acceuil')?></h2>
	<h3><?php __('_FirstStep')?> :</h3>
	<p><?php __('_FirstStepText')?></p>
	<br/>
	<h3><?php __('_SecondStep')?> :</h3>
	<p><?php __('_SecondStepText')?></p>
	<br/>
	<h3><?php __('_ThirdStep')?> :</h3>
	<p><?php __('_ThirdStepText')?></p>
</div>

<div class="actions">
	<ul>
	    <?php if ($IsAdmin){ echo '                  <li>'.$html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin')).'</li>';}?>
	    <li><?php echo $html->link(__('Mes infos', true), array('controller' => 'users', 'action' => 'edit/'.$Id)); ?> </li>
	    <li><?php echo $html->link(__('Contact', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
	    <li><?php echo $html->link(__('Fiche technique', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
	<BR>
	    <li><?php echo $html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>

