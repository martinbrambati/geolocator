<?php
/* Contact Test cases generated on: 2011-05-17 22:50:06 : 1305665406*/
App::import('Model', 'Contact');

class ContactTestCase extends CakeTestCase {
	var $fixtures = array('app.contact', 'app.mobile');

	function startTest() {
		$this->Contact =& ClassRegistry::init('Contact');
	}

	function endTest() {
		unset($this->Contact);
		ClassRegistry::flush();
	}

}
?>