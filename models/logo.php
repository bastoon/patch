<?php
class logo extends AppModel {

	var $name = 'logo';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Micloc' => array(
			'className' => 'Micloc',
			'foreignKey' => 'logo_id',
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