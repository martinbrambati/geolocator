<?php
/* Mobconfig Fixture generated on: 2011-05-17 22:50:31 : 1305665431 */
class MobconfigFixture extends CakeTestFixture {
	var $name = 'Mobconfig';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'activation_url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'max_coords_per_post' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'max_coords_from_gps' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'post_url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'return_height' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'update_position_time' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'update_config_time' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'update_post_time' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'activation_url' => 'Lorem ipsum dolor sit amet',
			'max_coords_per_post' => 1,
			'max_coords_from_gps' => 1,
			'post_url' => 'Lorem ipsum dolor sit amet',
			'return_height' => 1,
			'update_position_time' => 1,
			'update_config_time' => 1,
			'update_post_time' => 1
		),
	);
}
?>