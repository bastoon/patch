<?php
class light extends AppModel {

	var $name = 'light';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Tlight' => array(
			'className' => 'Tlight',
			'foreignKey' => 'tlight_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lightloc' => array(
			'className' => 'Lightloc',
			'foreignKey' => 'lightloc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lightcolor' => array(
			'className' => 'Lightcolor',
			'foreignKey' => 'lightcolor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Channel' => array(
			'className' => 'Channel',
			'foreignKey' => 'light_id',
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