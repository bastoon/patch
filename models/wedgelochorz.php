<?php
class wedgelochorz extends AppModel {

	var $name = 'wedgelochorz';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Wedgeloc' => array(
			'className' => 'Wedgeloc',
			'foreignKey' => 'wedgelochorz_id',
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