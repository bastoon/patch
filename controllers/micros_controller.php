<?php
class MicrosController extends AppController {

	var $name = 'Micros';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Micro->recursive = 0;
		$this->set('micros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Micro.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('micro', $this->Micro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Micro->create();
			if ($this->Micro->save($this->data)) {
				$this->Session->setFlash(__('The Micro has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Micro could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Micro->User->find('list');
		$marques = $this->Micro->Marque->find('list');
		$tmicros = $this->Micro->Tmicro->find('list');
		$this->set(compact('users', 'marques', 'tmicros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Micro', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Micro->save($this->data)) {
				$this->Session->setFlash(__('The Micro has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Micro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Micro->read(null, $id);
		}
		$users = $this->Micro->User->find('list');
		$marques = $this->Micro->Marque->find('list');
		$tmicros = $this->Micro->Tmicro->find('list');
		$this->set(compact('users','marques','tmicros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Micro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Micro->delete($id)) {
			$this->Session->setFlash(__('Micro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>