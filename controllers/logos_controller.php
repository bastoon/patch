<?php
class LogosController extends AppController {

	var $name = 'Logos';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Logo->recursive = 0;
		$this->set('logos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Logo.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('logo', $this->Logo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Logo->create();
			if ($this->Logo->save($this->data)) {
				$this->Session->setFlash(__('The Logo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Logo could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Logo', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Logo->save($this->data)) {
				$this->Session->setFlash(__('The Logo has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Logo could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Logo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Logo', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Logo->delete($id)) {
			$this->Session->setFlash(__('Logo deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>