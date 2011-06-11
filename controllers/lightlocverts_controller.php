<?php
class LightlocvertsController extends AppController {

	var $name = 'Lightlocverts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Lightlocvert->recursive = 0;
		$this->set('lightlocverts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lightlocvert.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lightlocvert', $this->Lightlocvert->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lightlocvert->create();
			if ($this->Lightlocvert->save($this->data)) {
				$this->Session->setFlash(__('The Lightlocvert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightlocvert could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lightlocvert', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lightlocvert->save($this->data)) {
				$this->Session->setFlash(__('The Lightlocvert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightlocvert could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lightlocvert->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Lightlocvert', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lightlocvert->delete($id)) {
			$this->Session->setFlash(__('Lightlocvert deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>