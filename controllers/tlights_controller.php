<?php
class TlightsController extends AppController {

	var $name = 'Tlights';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Tlight->recursive = 0;
		$this->set('tlights', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tlight.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tlight', $this->Tlight->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tlight->create();
			if ($this->Tlight->save($this->data)) {
				$this->Session->setFlash(__('The Tlight has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tlight could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Tlight->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tlight', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tlight->save($this->data)) {
				$this->Session->setFlash(__('The Tlight has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tlight could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tlight->read(null, $id);
		}
		$users = $this->Tlight->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tlight', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tlight->delete($id)) {
			$this->Session->setFlash(__('Tlight deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>