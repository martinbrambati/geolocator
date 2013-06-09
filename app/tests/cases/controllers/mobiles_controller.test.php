<?php
/* Mobiles Test cases generated on: 2011-05-18 03:19:29 : 1305681569*/
App::import('Controller', 'Mobiles');

class TestMobilesController extends MobilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MobilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.mobile', 'app.mobconfig', 'app.contact', 'app.mobposition');

	function startTest() {
		$this->Mobiles =& new TestMobilesController();
		$this->Mobiles->constructClasses();
	}

	function endTest() {
		unset($this->Mobiles);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>