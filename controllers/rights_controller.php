<?php
class RightsController extends AppController {

	var $name = 'Rights';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Right->recursive = 0;
		$this->set('rights', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Right.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('right', $this->Right->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Right->create();
			if ($this->Right->save($this->data)) {
				$this->Session->setFlash(__('The Right has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Right could not be saved. Please, try again.', true));
			}
		}
		$groupes = $this->Right->Groupe->find('list');
		$this->set(compact('groupes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Right', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Right->save($this->data)) {
				$this->Session->setFlash(__('The Right has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Right could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Right->read(null, $id);
		}
		$groupes = $this->Right->Groupe->find('list');
		$this->set(compact('groupes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Right', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Right->delete($id)) {
			$this->Session->setFlash(__('Right deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>