<?php
/* Mobconfigs Test cases generated on: 2011-05-17 22:59:18 : 1305665958*/
App::import('Controller', 'Mobconfigs');

class TestMobconfigsController extends MobconfigsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MobconfigsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.mobconfig', 'app.mobile', 'app.contact', 'app.mobposition');

	function startTest() {
		$this->Mobconfigs =& new TestMobconfigsController();
		$this->Mobconfigs->constructClasses();
	}

	function endTest() {
		unset($this->Mobconfigs);
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