<?php
/* SVN FILE: $Id$ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo ucfirst(APP_DIR).' '. $title_for_layout; ?> by CakeApp.com
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $html->link(__(ucfirst(APP_DIR), true), '/../../'); ?></h1>
		</div>
		<div id="flags">
			<a href="/fre">Français</a> |
			<a href="/eng">English</a>
		</div>
		<div id="content">

			<?php //echo Security::hash('12345',null,true); ?>

			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php 
			echo $html->link(
					$html->image('cakeapp_com.gif', array('alt'=> __('Build with within minutes with cakeapp.com a rappid development platform', true), 'border'=>"0")),
					'http://cakeapp.com/',
					array('escape'=>false,'title'=> __('Build with within minutes with cakeapp.com a rappid development platform', true)), null, false
				);
			echo '&nbsp;';
			echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('escape'=>false,'target'=>'_blank'), null, false
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
