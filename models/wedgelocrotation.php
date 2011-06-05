<?php
class wedgelocrotation extends AppModel {

	var $name = 'wedgelocrotation';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Wedgeloc' => array(
			'className' => 'Wedgeloc',
			'foreignKey' => 'wedgelocrotation_id',
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