<?php
class StageplansController extends AppController {

	var $name = 'Stageplans';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Stageplan->recursive = 0;
		$this->set('stageplans', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Stageplan.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('stageplan', $this->Stageplan->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Stageplan->create();
			if ($this->Stageplan->save($this->data)) {
				$this->Session->setFlash(__('The Stageplan has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Stageplan could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Stageplan->User->find('list');
		$soundpatches = $this->Stageplan->Soundpatch->find('list');
		$this->set(compact('users', 'soundpatches'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Stageplan', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Stageplan->save($this->data)) {
				$this->Session->setFlash(__('The Stageplan has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Stageplan could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Stageplan->read(null, $id);
		}
		$users = $this->Stageplan->User->find('list');
		$soundpatches = $this->Stageplan->Soundpatch->find('list');
		$this->set(compact('users','soundpatches'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Stageplan', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Stageplan->delete($id)) {
			$this->Session->setFlash(__('Stageplan deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>