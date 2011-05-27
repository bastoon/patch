<?php
class channel extends AppModel {

	var $name = 'channel';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Light' => array(
			'className' => 'Light',
			'foreignKey' => 'light_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lightpatch' => array(
			'className' => 'Lightpatch',
			'foreignKey' => 'lightpatch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>