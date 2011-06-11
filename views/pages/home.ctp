<h2>Fiches techniques</h2>

<?php
if(Configure::read() > 0):
//	Debugger::checkSessionKey();
endif;
?>

<div class="actions">
        <ul>/
                <li><?php //echo $html->link(__('Accueil', true), array('action' => 'home'));?></li>
                <li><?php echo $html->link(__('Login', true), array('controller' => 'users','action' => 'login'));?></li>
                <li><?php echo $html->link(__('Inscription', true), array('controller' => 'users','action' => 'add'));?></li>

        </ul>
</div>



<?php

function listControllers() {
	$exclude = array('Home', 'Pages', 'App');

    uses('Folder');
    $Folder =& new Folder();
 
    $Configure =& Configure::getInstance();
    $controllers = array();
    foreach($Configure->controllerPaths as $path) {
        $Folder->cd($path);
        $controllerFiles = $Folder->find('.+_controller\.php$');
		foreach ($controllerFiles as $file) {
			$controller = Inflector::camelize(r('_controller.php', '', $file));
			if (!in_array($controller, $exclude)) {
				array_push($controllers, $controller);  
			}
		}
    }
    sort($controllers);
    return array_unique($controllers);
}
/* 
foreach (listControllers() as $controller) {
	echo $html->tag('h3', Inflector::humanize($controller));
	echo $html->link('List '.Inflector::humanize($controller), array('controller' => Inflector::tableize($controller)), array('style' => 'display:block;')).'<br />';
	echo $html->link('Add '.Inflector::humanize(Inflector::singularize($controller)), array('controller' => Inflector::tableize($controller), 'action' => 'add'), array('style' => 'display:block;')).'<br />';
}
*/
?>


<!--<p>
<?php
	if (is_writable(TMP)):
		echo '<span class="notice success">';
			__('Your tmp directory is writable.');
		echo '</span>';
	else:
		echo '<span class="notice">';
			__('Your tmp directory is NOT writable.');
		echo '</span>';
	endif;
?>
</p>
<p>
<?php
	$settings = Cache::settings();
	if (!empty($settings)):
		echo '<span class="notice success">';
				echo sprintf(__('The %s is being used for caching. To change the config edit APP/config/core.php ', true), '<em>'. $settings['engine'] . 'Engine</em>');
		echo '</span>';
	else:
		echo '<span class="notice">';
				__('Your cache is NOT working. Please check the settings in APP/config/core.php');
		echo '</span>';
	endif;
?>
</p>
<p>
<?php
	$filePresent = null;
	if (file_exists(CONFIGS . 'database.php')):
		echo '<span class="notice success">';
			__('Your database configuration file is present.');
			$filePresent = true;
		echo '</span>';
	else:
		echo '<span class="notice">';
			__('Your database configuration file is NOT present.');
			echo '<br/>';
			__('Rename config/database.php.default to config/database.php');
		echo '</span>';
	endif;
?>
</p>
<?php
if (!empty($filePresent)):
 	uses('model' . DS . 'connection_manager');
	$db = ConnectionManager::getInstance();
 	$connected = $db->getDataSource('default');
?>
<p>
<?php
	if ($connected->isConnected()):
		echo '<span class="notice success">';
 			__('Cake is able to connect to the database.');
		echo '</span>';
	else:
		echo '<span class="notice">';
			__('Cake is NOT able to connect to the database.');
		echo '</span>';
	endif;
?>
</p>
//--><?php endif;?>
