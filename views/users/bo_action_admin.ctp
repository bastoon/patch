<div class="soundpatches view">
	<H2>ADMINISTRATION</H2>
	Bienvenue <B><?php echo $Username; ?></B> dans le backoffice
	<BR/><BR/>
	<table>
	 <tr><th>Devices</th><th>Locations</th></tr>
	 <tr><td> 
          <ul>
                <li><?php echo $html->link(__('Instruments', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Mic brand', true), array('controller' => 'marques', 'action' => 'index')); ?> </li>
				<li><?php echo $html->link(__('Stands', true), array('controller' => 'stands', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Wedge', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
          </ul>
         </td><td>
          <ul>
                <li><?php echo $html->link(__('Mic Location', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Wedge Location', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
          </ul>
	 </td></tr>
	</table>

	<table>
	 <tr><th>Other</th><th>-</th></tr>
	 <tr><td> 
          <ul>
                <li><?php echo $html->link(__('Contact type', true), array('controller' => 'tcontacts', 'action' => 'index')); ?> </li>
          </ul>
         </td><td>
          <ul>
                <li><?php echo "-"?> </li>
          </ul>
	 </td></tr>
	</table>

</div>

        <div class="actions">
          <ul>
                <li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>
                <li><?php echo $html->link(__('Contacts List', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Patchs List', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
                <BR>
                <li><?php echo $html->link(__('Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('Users Rights', true), array('controller' => 'rights', 'action' => 'index')); ?> </li>
                <li><?php //echo $html->link(__('AdminGroups', true), array('controller' => 'Admingroupes', 'action' => 'index')); ?> </li>
		<BR>
                <li><?php echo $html->link(__('Logout', true), array('controller' => 'users', 'action' => 'logout')); ?> </li>
          </ul>
        </div>

