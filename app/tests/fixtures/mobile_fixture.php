<?php
/* Mobile Fixture generated on: 2011-05-17 22:50:36 : 1305665436 */
class MobileFixture extends CakeTestFixture {
	var $name = 'Mobile';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'hash' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobconfig_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'phone_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'hash' => array('column' => array('hash', 'name'), 'unique' => 1), 'phone_number' => array('column' => array('phone_number', 'contact_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'hash' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'mobconfig_id' => 1,
			'phone_number' => 'Lorem ipsum dolor sit amet',
			'contact_id' => 1
		),
	);
}
?>