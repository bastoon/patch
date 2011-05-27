<?php
class TeffectsController extends AppController {

	var $name = 'Teffects';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Teffect->recursive = 0;
		$this->set('teffects', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Teffect.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('teffect', $this->Teffect->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Teffect->create();
			if ($this->Teffect->save($this->data)) {
				$this->Session->setFlash(__('The Teffect has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Teffect could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Teffect->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Teffect', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Teffect->save($this->data)) {
				$this->Session->setFlash(__('The Teffect has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Teffect could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Teffect->read(null, $id);
		}
		$users = $this->Teffect->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Teffect', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Teffect->del($id)) {
			$this->Session->setFlash(__('Teffect deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>