<?php
class TlightcolorsController extends AppController {

	var $name = 'Tlightcolors';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Tlightcolor->recursive = 0;
		$this->set('tlightcolors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tlightcolor.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tlightcolor', $this->Tlightcolor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tlightcolor->create();
			if ($this->Tlightcolor->save($this->data)) {
				$this->Session->setFlash(__('The Tlightcolor has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tlightcolor could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Tlightcolor->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tlightcolor', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tlightcolor->save($this->data)) {
				$this->Session->setFlash(__('The Tlightcolor has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tlightcolor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tlightcolor->read(null, $id);
		}
		$users = $this->Tlightcolor->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tlightcolor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tlightcolor->del($id)) {
			$this->Session->setFlash(__('Tlightcolor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>