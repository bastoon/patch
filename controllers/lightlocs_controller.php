<?php
class LightlocsController extends AppController {

	var $name = 'Lightlocs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Lightloc->recursive = 0;
		$this->set('lightlocs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lightloc.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lightloc', $this->Lightloc->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lightloc->create();
			if ($this->Lightloc->save($this->data)) {
				$this->Session->setFlash(__('The Lightloc has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightloc could not be saved. Please, try again.', true));
			}
		}
		$lightlochorzs = $this->Lightloc->Lightlochorz->find('list');
		$lightlocverts = $this->Lightloc->Lightlocvert->find('list');
		$this->set(compact('lightlochorzs', 'lightlocverts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lightloc', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lightloc->save($this->data)) {
				$this->Session->setFlash(__('The Lightloc has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightloc could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lightloc->read(null, $id);
		}
		$lightlochorzs = $this->Lightloc->Lightlochorz->find('list');
		$lightlocverts = $this->Lightloc->Lightlocvert->find('list');
		$this->set(compact('lightlochorzs','lightlocverts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Lightloc', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lightloc->del($id)) {
			$this->Session->setFlash(__('Lightloc deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>