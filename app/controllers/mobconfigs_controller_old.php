<?php
class MobconfigsController extends AppController {

	var $name = 'Mobconfigs';

	function index() {
		$this->Mobconfig->recursive = 0;
		$this->set('mobconfigs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mobconfig', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mobconfig', $this->Mobconfig->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Mobconfig->create();
			if ($this->Mobconfig->save($this->data)) {
				$this->Session->setFlash(__('The mobconfig has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobconfig could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mobconfig', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Mobconfig->save($this->data)) {
				$this->Session->setFlash(__('The mobconfig has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobconfig could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mobconfig->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mobconfig', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Mobconfig->delete($id)) {
			$this->Session->setFlash(__('Mobconfig deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mobconfig was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>