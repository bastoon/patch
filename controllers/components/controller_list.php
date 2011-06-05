<?php
/**
 * A simple component which returns a list of controllers plus the corresponding action names.
 *
 * See also: http://cakebaker.42dh.com/2006/07/21/how-to-list-all-controllers
 *
 * This code is in the public domain, use it in any way you like <img src="http://www.webbax.ch/wp-includes/images/smilies/icon_wink.gif" alt=";-)" class="wp-smiley">
 */
class ControllerListComponent extends Object {
    public function get() {
        $controllerClasses = App::objects('controller');

        foreach($controllerClasses as $controller) {
            if ($controller != 'App') {
                App::import('Controller', $controller);
                $className = $controller . 'Controller';
                $actions = get_class_methods($className);

                foreach($actions as $k => $v) {
                    if ($v{0} == '_') {
                        unset($actions[$k]);
                    }
                }

		$parentActions = get_class_methods('AppController');
                $controllers[$controller] = array_diff($actions, $parentActions);
            }
        }

        return $controllers;
    }
}

