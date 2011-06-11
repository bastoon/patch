<?php
class LightcolorsController extends AppController {

	var $name = 'Lightcolors';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Lightcolor->recursive = 0;
		$this->set('lightcolors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lightcolor.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('lightcolor', $this->Lightcolor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Lightcolor->create();
			if ($this->Lightcolor->save($this->data)) {
				$this->Session->setFlash(__('The Lightcolor has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightcolor could not be saved. Please, try again.', true));
			}
		}
		$tlightcolors = $this->Lightcolor->Tlightcolor->find('list');
		$this->set(compact('tlightcolors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lightcolor', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lightcolor->save($this->data)) {
				$this->Session->setFlash(__('The Lightcolor has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Lightcolor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lightcolor->read(null, $id);
		}
		$tlightcolors = $this->Lightcolor->Tlightcolor->find('list');
		$this->set(compact('tlightcolors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Lightcolor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lightcolor->delete($id)) {
			$this->Session->setFlash(__('Lightcolor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>