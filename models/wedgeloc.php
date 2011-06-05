<?php
class wedgeloc extends AppModel {

	var $name = 'wedgeloc';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Wedgelochorz' => array(
			'className' => 'Wedgelochorz',
			'foreignKey' => 'wedgelochorz_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Wedgelocvert' => array(
			'className' => 'Wedgelocvert',
			'foreignKey' => 'wedgelocvert_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Wedgelocrotation' => array(
			'className' => 'Wedgelocrotation',
			'foreignKey' => 'wedgelocrotation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Wedge' => array(
			'className' => 'Wedge',
			'foreignKey' => 'wedgeloc_id',
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