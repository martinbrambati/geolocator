<?php
/* Mobpositions Test cases generated on: 2011-05-17 23:15:37 : 1305666937*/
App::import('Controller', 'Mobpositions');

class TestMobpositionsController extends MobpositionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MobpositionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.mobposition', 'app.mobile', 'app.mobconfig', 'app.contact');

	function startTest() {
		$this->Mobpositions =& new TestMobpositionsController();
		$this->Mobpositions->constructClasses();
	}

	function endTest() {
		unset($this->Mobpositions);
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