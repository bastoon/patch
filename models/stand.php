<?php
class stand extends AppModel {

	var $name = 'stand';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Track' => array(
			'className' => 'Track',
			'foreignKey' => 'stand_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>