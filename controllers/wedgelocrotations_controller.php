<?php
class WedgelocrotationsController extends AppController {

	var $name = 'Wedgelocrotations';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Wedgelocrotation->recursive = 0;
		$this->set('wedgelocrotations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Wedgelocrotation.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wedgelocrotation', $this->Wedgelocrotation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Wedgelocrotation->create();
			if ($this->Wedgelocrotation->save($this->data)) {
				$this->Session->setFlash(__('The Wedgelocrotation has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgelocrotation could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Wedgelocrotation', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wedgelocrotation->save($this->data)) {
				$this->Session->setFlash(__('The Wedgelocrotation has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgelocrotation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wedgelocrotation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Wedgelocrotation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wedgelocrotation->del($id)) {
			$this->Session->setFlash(__('Wedgelocrotation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>