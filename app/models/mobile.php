<?php
class Mobile extends AppModel {
	var $name = 'Mobile';
	var $validate = array(
		'mobconfig_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Mobconfig' => array(
			'className' => 'Mobconfig',
			'foreignKey' => 'mobconfig_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'contact_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Mobposition' => array(
			'className' => 'Mobposition',
			'foreignKey' => 'mobile_id',
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