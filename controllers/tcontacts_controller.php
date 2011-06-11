<?php
class TcontactsController extends AppController {

	var $name = 'Tcontacts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Tcontact->recursive = 0;
		$this->set('tcontacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tcontact.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tcontact', $this->Tcontact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tcontact->create();
			if ($this->Tcontact->save($this->data)) {
				$this->Session->setFlash(__('The Tcontact has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tcontact could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Tcontact->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tcontact', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tcontact->save($this->data)) {
				$this->Session->setFlash(__('The Tcontact has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tcontact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tcontact->read(null, $id);
		}
		$users = $this->Tcontact->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tcontact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tcontact->delete($id)) {
			$this->Session->setFlash(__('Tcontact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>