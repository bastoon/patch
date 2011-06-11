<?php
class LightpatchesController extends AppController {

	var $name = 'Lightpatches';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Lightpatch->recursive = 0;
		$this->set('lightpatches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lightpatch.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lightpatch', $this->Lightpatch->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lightpatch->create();
			if ($this->Lightpatch->save($this->data)) {
				$this->Session->setFlash(__('The Lightpatch has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightpatch could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Lightpatch->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lightpatch', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lightpatch->save($this->data)) {
				$this->Session->setFlash(__('The Lightpatch has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightpatch could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lightpatch->read(null, $id);
		}
		$users = $this->Lightpatch->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Lightpatch', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lightpatch->delete($id)) {
			$this->Session->setFlash(__('Lightpatch deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>