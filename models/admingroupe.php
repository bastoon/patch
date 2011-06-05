<?php
class admingroupe extends AppModel {

	var $name = 'admingroupe';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Right' => array(
			'className' => 'Right',
			'foreignKey' => 'admingroupe_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)/*,
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'groupe_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)*/
	);

}
?>
