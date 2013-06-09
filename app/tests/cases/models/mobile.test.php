<?php
/* Mobile Test cases generated on: 2011-05-17 22:50:36 : 1305665436*/
App::import('Model', 'Mobile');

class MobileTestCase extends CakeTestCase {
	var $fixtures = array('app.mobile', 'app.mobconfig', 'app.contact', 'app.mobposition');

	function startTest() {
		$this->Mobile =& ClassRegistry::init('Mobile');
	}

	function endTest() {
		unset($this->Mobile);
		ClassRegistry::flush();
	}

}
?>