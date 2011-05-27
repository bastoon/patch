<?php
class lightlocvert extends AppModel {

	var $name = 'lightlocvert';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Lightloc' => array(
			'className' => 'Lightloc',
			'foreignKey' => 'lightlocvert_id',
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