<?php
class micro extends AppModel {

	var $name = 'micro';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Marque' => array(
			'className' => 'Marque',
			'foreignKey' => 'marque_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tmicro' => array(
			'className' => 'Tmicro',
			'foreignKey' => 'tmicro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Track' => array(
			'className' => 'Track',
			'foreignKey' => 'micro_id',
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