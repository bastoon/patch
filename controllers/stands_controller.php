<?php
class StandsController extends AppController {

	var $name = 'Stands';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Stand->recursive = 0;
		$this->set('stands', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Stand.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('stand', $this->Stand->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Stand->create();
			if ($this->Stand->save($this->data)) {
				$this->Session->setFlash(__('The Stand has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Stand could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Stand', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Stand->save($this->data)) {
				$this->Session->setFlash(__('The Stand has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Stand could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Stand->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Stand', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Stand->delete($id)) {
			$this->Session->setFlash(__('Stand deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>