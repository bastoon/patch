<?php
class MiclochorzsController extends AppController {

	var $name = 'Miclochorzs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Miclochorz->recursive = 0;
		$this->set('miclochorzs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Miclochorz.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('miclochorz', $this->Miclochorz->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Miclochorz->create();
			if ($this->Miclochorz->save($this->data)) {
				$this->Session->setFlash(__('The Miclochorz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Miclochorz could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Miclochorz', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Miclochorz->save($this->data)) {
				$this->Session->setFlash(__('The Miclochorz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Miclochorz could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Miclochorz->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Miclochorz', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Miclochorz->del($id)) {
			$this->Session->setFlash(__('Miclochorz deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>