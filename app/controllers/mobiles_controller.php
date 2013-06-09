<?php
class MobilesController extends AppController {

	var $name = 'Mobiles';

	function index() {
		$this->Mobile->recursive = 0;
		$this->set('mobiles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mobile', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mobile', $this->Mobile->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Mobile->create();
			if ($this->Mobile->save($this->data)) {
				$this->Session->setFlash(__('The mobile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobile could not be saved. Please, try again.', true));
			}
		}
		$mobconfigs = $this->Mobile->Mobconfig->find('list');
		$contacts = $this->Mobile->Contact->find('list');
		$this->set(compact('mobconfigs', 'contacts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mobile', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Mobile->save($this->data)) {
				$this->Session->setFlash(__('The mobile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mobile->read(null, $id);
		}
		$mobconfigs = $this->Mobile->Mobconfig->find('list');
		$contacts = $this->Mobile->Contact->find('list');
		$this->set(compact('mobconfigs', 'contacts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mobile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Mobile->delete($id)) {
			$this->Session->setFlash(__('Mobile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mobile was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function activate(){
		$this->layout = 'default_blank';
		$default = $this->Mobile->Mobconfig->query('SELECT * FROM `mobconfigs` order by id asc');
		$this->data['Mobile'] = array();
		$name = md5(microtime(true));
		$this->data['Mobile']['mobconfig_id'] = $default[0]['mobconfigs']['id'];
		$this->data['Mobile']['name'] = $name;
		if (!empty($this->data)) {
			if ($this->Mobile->save($this->data)){
				$mobile = $this->Mobile->query("SELECT * FROM `mobiles` WHERE name = '$name'");
				$id = $mobile[0]['mobiles']['id'];
				$config = $default[0]['mobconfigs'];
				$this->set ("sep",";");
				$this->set ("id",$id);
				$this->set("config",$config);

			} else {
				$this->Session->setFlash(__('The mobile could not be saved. Please, try again.', true));
			}
		}
	}

	function checkconfig($id){
		$this->layout = 'default_blank';
		$mobiles = $this->Mobile->read(null, $id);
		$configId = $mobiles['Mobile']['mobconfig_id'];
		$default = $this->Mobile->Mobconfig->query('SELECT * FROM `mobconfigs` where id='.$configId);
		$config = $default[0]['mobconfigs'];
		$this->set ("sep",";");
		$this->set("config",$config);
	}
	
	function checkconnection(){
		$this->layout = 'default_blank';
	}
	
}
?>