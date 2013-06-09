<?php
/* Mobposition Fixture generated on: 2011-05-17 22:50:41 : 1305665441 */
class MobpositionFixture extends CakeTestFixture {
	var $name = 'Mobposition';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'mobile_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'latitude' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '17,14'),
		'longitude' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '17,14'),
		'height' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '17,14'),
		'insertion_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'mobile_id' => 1,
			'latitude' => 1,
			'longitude' => 1,
			'height' => 1,
			'insertion_date' => '2011-05-17 22:50:41'
		),
	);
}
?>