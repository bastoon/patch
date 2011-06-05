<?php
class lightcolor extends AppModel {

	var $name = 'lightcolor';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Tlightcolor' => array(
			'className' => 'Tlightcolor',
			'foreignKey' => 'tlightcolor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Light' => array(
			'className' => 'Light',
			'foreignKey' => 'lightcolor_id',
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