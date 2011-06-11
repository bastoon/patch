<?php
class WedgelochorzsController extends AppController {

	var $name = 'Wedgelochorzs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Wedgelochorz->recursive = 0;
		$this->set('wedgelochorzs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Wedgelochorz.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wedgelochorz', $this->Wedgelochorz->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Wedgelochorz->create();
			if ($this->Wedgelochorz->save($this->data)) {
				$this->Session->setFlash(__('The Wedgelochorz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgelochorz could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Wedgelochorz', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wedgelochorz->save($this->data)) {
				$this->Session->setFlash(__('The Wedgelochorz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgelochorz could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wedgelochorz->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Wedgelochorz', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wedgelochorz->delete($id)) {
			$this->Session->setFlash(__('Wedgelochorz deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>