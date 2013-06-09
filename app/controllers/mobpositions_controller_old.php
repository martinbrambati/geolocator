<?php
class MobpositionsController extends AppController {

	var $name = 'Mobpositions';

	function index() {
		$this->Mobposition->recursive = 0;
		$this->set('mobpositions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid mobposition', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mobposition', $this->Mobposition->read(null, $id));
	}

	function add() {
		
		if (!empty($this->data)) {
			$this->Mobposition->create();
			if ($this->Mobposition->save($this->data)) {
				$this->Session->setFlash(__('The mobposition has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobposition could not be saved. Please, try again.', true));
			}
		}
		$mobiles = $this->Mobposition->Mobile->find('list');
		$this->set(compact('mobiles'));
	}
	
	function addByOne() {
		
		if (!empty($this->data)) {
			$this->Mobposition->create();
			if ($this->Mobposition->save($this->data)) {
				return true;
			} else {
				return false;
			}
		}
	}
	function addlist($list) {
		//1;23.9,98.009090,123.23232;23.9,98.009090,123.23232
		$this->layout = 'default_blank';
		$listSplit = preg_split("/\;/", $list, -1, PREG_SPLIT_NO_EMPTY);
		$mobileId = $listSplit[0];
		
		for ($i=1;$i<sizeof($listSplit);$i++){
			$coords = preg_split("/\,/", $listSplit[$i], -1, PREG_SPLIT_NO_EMPTY);
			$coords2 = preg_split("/d/", $coords[3], -1, PREG_SPLIT_NO_EMPTY);		
			$ymd = preg_split("/\-/", $coords2[0], -1, PREG_SPLIT_NO_EMPTY);
			$hms = preg_split("/\-/", $coords2[1], -1, PREG_SPLIT_NO_EMPTY);
			$ymd[1] = $ymd[1]+1;
			$this->data = array ('Mobposition' => array('mobile_id' => $mobileId,'latitude'=>$coords[0],'longitude'=>$coords[1],'height'=>$coords[2],'insertion_date'=>array('month'=>$ymd[1],'day'=>$ymd[2],'year'=>$ymd[0],'hour'=>$hms[0],'min'=>$hms[1],'sec'=>$hms[2])));
			
			$this->addByOne();
		}
		
	}
	
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid mobposition', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Mobposition->save($this->data)) {
				$this->Session->setFlash(__('The mobposition has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mobposition could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Mobposition->read(null, $id);
		}
		$mobiles = $this->Mobposition->Mobile->find('list');
		$this->set(compact('mobiles'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for mobposition', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Mobposition->delete($id)) {
			$this->Session->setFlash(__('Mobposition deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Mobposition was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
}
?>