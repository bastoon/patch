<?php
class MarquesController extends AppController {

	var $name = 'Marques';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Marque->recursive = 0;
		$this->set('marques', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Marque.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('marque', $this->Marque->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Marque->create();
			if ($this->Marque->save($this->data)) {
				$this->Session->setFlash(__('The Marque has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Marque could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Marque->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Marque', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Marque->save($this->data)) {
				$this->Session->setFlash(__('The Marque has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Marque could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Marque->read(null, $id);
		}
		$users = $this->Marque->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Marque', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Marque->del($id)) {
			$this->Session->setFlash(__('Marque deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>