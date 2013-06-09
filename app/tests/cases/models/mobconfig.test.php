<?php
/* Mobconfig Test cases generated on: 2011-05-17 22:50:31 : 1305665431*/
App::import('Model', 'Mobconfig');

class MobconfigTestCase extends CakeTestCase {
	var $fixtures = array('app.mobconfig', 'app.mobile');

	function startTest() {
		$this->Mobconfig =& ClassRegistry::init('Mobconfig');
	}

	function endTest() {
		unset($this->Mobconfig);
		ClassRegistry::flush();
	}

}
?>