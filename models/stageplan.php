<?php
class stageplan extends AppModel {

	var $name = 'stageplan';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Soundpatch' => array(
			'className' => 'Soundpatch',
			'foreignKey' => 'soundpatch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>