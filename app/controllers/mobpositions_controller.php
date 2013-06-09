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
		//71;23.9,98.009090,123.23232,22-10-2001d10-09-09
		$this->layout = 'default_blank';
		$listSplit = preg_split("/\;/", $list, -1, PREG_SPLIT_NO_EMPTY);
		$mobileId = $listSplit[0];

		for ($i=1;$i<sizeof($listSplit);$i++){
			$coords = preg_split("/\,/", $listSplit[$i], -1, PREG_SPLIT_NO_EMPTY);
			$coords2 = preg_split("/d/", $coords[3], -1, PREG_SPLIT_NO_EMPTY);
			$ymd = preg_split("/\-/", $coords2[0], -1, PREG_SPLIT_NO_EMPTY);
			$hms = preg_split("/\-/", $coords2[1], -1, PREG_SPLIT_NO_EMPTY);
			$ymd[1] = $ymd[1]+1;
			//Query para determinar el incidente asignado en ese momento-------------------
			$query = "select r.rINC_Codigo  from emruno.c_rinc c, gps.mobiles m, emruno.rINC r where c.rMOV_Codigo=m.name  and c.rINC_Codigo = r.rINC_Codigo and m.id=".$mobileId." order by c.c_rinc_Fecha desc";
			$conexion = $this->openConnection();
			$result = mysql_query($query, $conexion) or $this->printErr(mysql_error());
			$object = mysql_fetch_assoc($result);
			mysql_free_result($result);
			$this->closeConnection($conexion);
			//Fin query--------------------------------------------------------------------
			
			$this->data = array ('Mobposition' => array('mobile_id' => $mobileId,'latitude'=>$coords[0],'longitude'=>$coords[1],'height'=>$coords[2],'rinc_id'=>$object['rINC_Codigo'],'insertion_date'=>array('month'=>$ymd[1],'day'=>$ymd[2],'year'=>$ymd[0],'hour'=>$hms[0],'min'=>$hms[1],'sec'=>$hms[2])));
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


	function openConnection(){
		$conexion= mysql_connect("localhost", "gpsemruno", "pqwnCR5xZf76FWF2");
		//mysql_select_db("gps", $conexion);
		mysql_query ("SET NAMES 'utf8'");
		return $conexion;
	}

	function closeConnection($connection){
		mysql_close($connection);
	}

	function printErr($err){
		//echo $err;
	}
}
?>