<?php
class InstrumentsController extends AppController {

	var $name = 'Instruments';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Instrument->recursive = 0;
		$this->set('instruments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Instrument.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('instrument', $this->Instrument->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Instrument->create();
			if ($this->Instrument->save($this->data)) {
				$this->Session->setFlash(__('The Instrument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Instrument could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Instrument->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Instrument', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Instrument->save($this->data)) {
				$this->Session->setFlash(__('The Instrument has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Instrument could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Instrument->read(null, $id);
		}
		$users = $this->Instrument->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Instrument', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Instrument->delete($id)) {
			$this->Session->setFlash(__('Instrument deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>