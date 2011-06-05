<?php
class lightlochorz extends AppModel {

	var $name = 'lightlochorz';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Lightloc' => array(
			'className' => 'Lightloc',
			'foreignKey' => 'lightlochorz_id',
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