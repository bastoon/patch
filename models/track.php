<?php
class track extends AppModel {

	var $name = 'track';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'contact_id',
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
		),
		'Instrument' => array(
			'className' => 'Instrument',
			'foreignKey' => 'instrument_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Micro' => array(
			'className' => 'Micro',
			'foreignKey' => 'micro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tinsert' => array(
			'className' => 'Tinsert',
			'foreignKey' => 'tinsert_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Teffect' => array(
			'className' => 'Teffect',
			'foreignKey' => 'teffect_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Stand' => array(
			'className' => 'Stand',
			'foreignKey' => 'stand_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Micloc' => array(
			'className' => 'Micloc',
			'foreignKey' => 'micloc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>