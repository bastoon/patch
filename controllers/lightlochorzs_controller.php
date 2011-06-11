<?php
class LightlochorzsController extends AppController {

	var $name = 'Lightlochorzs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Lightlochorz->recursive = 0;
		$this->set('lightlochorzs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lightlochorz.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lightlochorz', $this->Lightlochorz->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lightlochorz->create();
			if ($this->Lightlochorz->save($this->data)) {
				$this->Session->setFlash(__('The Lightlochorz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightlochorz could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lightlochorz', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lightlochorz->save($this->data)) {
				$this->Session->setFlash(__('The Lightlochorz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightlochorz could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lightlochorz->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Lightlochorz', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lightlochorz->delete($id)) {
			$this->Session->setFlash(__('Lightlochorz deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>