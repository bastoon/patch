<?php
class MiclocvertsController extends AppController {

	var $name = 'Miclocverts';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Miclocvert->recursive = 0;
		$this->set('miclocverts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Miclocvert.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('miclocvert', $this->Miclocvert->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Miclocvert->create();
			if ($this->Miclocvert->save($this->data)) {
				$this->Session->setFlash(__('The Miclocvert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Miclocvert could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Miclocvert', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Miclocvert->save($this->data)) {
				$this->Session->setFlash(__('The Miclocvert has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Miclocvert could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Miclocvert->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Miclocvert', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Miclocvert->del($id)) {
			$this->Session->setFlash(__('Miclocvert deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>