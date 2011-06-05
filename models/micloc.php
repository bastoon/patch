<?php
class micloc extends AppModel {

	var $name = 'micloc';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Miclochorz' => array(
			'className' => 'Miclochorz',
			'foreignKey' => 'miclochorz_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Miclocvert' => array(
			'className' => 'Miclocvert',
			'foreignKey' => 'miclocvert_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Logo' => array(
			'className' => 'Logo',
			'foreignKey' => 'logo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Track' => array(
			'className' => 'Track',
			'foreignKey' => 'micloc_id',
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