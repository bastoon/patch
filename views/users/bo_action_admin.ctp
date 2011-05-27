<?php
        echo '<div class="soundpatches view">';
        echo '<H2>ADMINISTRATION</H2>';
        echo    'Bienvenue <B>'.$Username.'</B> dans le backoffice';
        echo    '<BR/><BR/>';
?>        
          <ul>
                <li><?php echo $html->link(__('Inst. List', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Mic List', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Mic brand List', true), array('controller' => 'marques', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Mic Location List', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('Stands List', true), array('controller' => 'stands', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Wedge List', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Wedge Location List', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
                <BR/>
                <li><?php echo $html->link(__('Mic Location List', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>


          </ul>
<?php
        echo '</div>';
?>

        <div class="actions">
          <ul>
                <li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>
                <li><?php echo $html->link(__('Contacts List', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Patchs List', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
                <BR>
                <li><?php echo $html->link(__('Users List', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Users Rights', true), array('controller' => 'rights', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('AdminGroups', true), array('controller' => 'Admingroupes', 'action' => 'index')); ?> </li>
		<BR>
                <li><?php echo $html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>
          </ul>
        </div>

