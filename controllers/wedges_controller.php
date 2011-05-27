<?php
class WedgesController extends AppController {

	var $name = 'Wedges';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Wedge->recursive = 0;
		$this->set('wedges', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Wedge.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wedge', $this->Wedge->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Wedge->create();
			if ($this->Wedge->save($this->data)) {
				$this->Session->setFlash(__('The Wedge has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedge could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Wedge->User->find('list');
		$wedgelocs = $this->Wedge->Wedgeloc->find('list');
		$this->set(compact('users', 'wedgelocs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Wedge', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wedge->save($this->data)) {
				$this->Session->setFlash(__('The Wedge has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedge could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wedge->read(null, $id);
		}
		$users = $this->Wedge->User->find('list');
		$wedgelocs = $this->Wedge->Wedgeloc->find('list');
		$this->set(compact('users','wedgelocs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Wedge', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wedge->del($id)) {
			$this->Session->setFlash(__('Wedge deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>