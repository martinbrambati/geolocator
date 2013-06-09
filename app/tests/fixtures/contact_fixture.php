<?php
/* Contact Fixture generated on: 2011-05-17 22:50:06 : 1305665406 */
class ContactFixture extends CakeTestFixture {
	var $name = 'Contact';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'surname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 512, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'name' => array('column' => array('name', 'email'), 'unique' => 1), 'surname' => array('column' => 'surname', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'surname' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>