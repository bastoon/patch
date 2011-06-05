<?php
class WedgelocvertsController extends AppController {

	var $name = 'Wedgelocverts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Wedgelocvert->recursive = 0;
		$this->set('wedgelocverts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Wedgelocvert.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wedgelocvert', $this->Wedgelocvert->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Wedgelocvert->create();
			if ($this->Wedgelocvert->save($this->data)) {
				$this->Session->setFlash(__('The Wedgelocvert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgelocvert could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Wedgelocvert', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wedgelocvert->save($this->data)) {
				$this->Session->setFlash(__('The Wedgelocvert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgelocvert could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wedgelocvert->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Wedgelocvert', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wedgelocvert->del($id)) {
			$this->Session->setFlash(__('Wedgelocvert deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>