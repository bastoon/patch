<?php
class TinsertsController extends AppController {

	var $name = 'Tinserts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Tinsert->recursive = 0;
		$this->set('tinserts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tinsert.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tinsert', $this->Tinsert->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tinsert->create();
			if ($this->Tinsert->save($this->data)) {
				$this->Session->setFlash(__('The Tinsert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tinsert could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Tinsert->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tinsert', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tinsert->save($this->data)) {
				$this->Session->setFlash(__('The Tinsert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tinsert could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tinsert->read(null, $id);
		}
		$users = $this->Tinsert->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tinsert', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tinsert->delete($id)) {
			$this->Session->setFlash(__('Tinsert deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>