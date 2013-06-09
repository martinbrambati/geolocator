<?php
/* Mobposition Test cases generated on: 2011-05-17 22:50:41 : 1305665441*/
App::import('Model', 'Mobposition');

class MobpositionTestCase extends CakeTestCase {
	var $fixtures = array('app.mobposition', 'app.mobile', 'app.mobconfig', 'app.contact');

	function startTest() {
		$this->Mobposition =& ClassRegistry::init('Mobposition');
	}

	function endTest() {
		unset($this->Mobposition);
		ClassRegistry::flush();
	}

}
?>