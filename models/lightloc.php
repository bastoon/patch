<?php
class lightloc extends AppModel {

	var $name = 'lightloc';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Lightlochorz' => array(
			'className' => 'Lightlochorz',
			'foreignKey' => 'lightlochorz_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lightlocvert' => array(
			'className' => 'Lightlocvert',
			'foreignKey' => 'lightlocvert_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Light' => array(
			'className' => 'Light',
			'foreignKey' => 'lightloc_id',
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