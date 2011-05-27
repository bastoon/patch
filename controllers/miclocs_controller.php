<?php
class MiclocsController extends AppController {

	var $name = 'Miclocs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Micloc->recursive = 0;
		$this->set('miclocs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Micloc.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('micloc', $this->Micloc->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Micloc->create();
			if ($this->Micloc->save($this->data)) {
				$this->Session->setFlash(__('The Micloc has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Micloc could not be saved. Please, try again.', true));
			}
		}
		$miclochorzs = $this->Micloc->Miclochorz->find('list');
		$miclocverts = $this->Micloc->Miclocvert->find('list');
		$logos = $this->Micloc->Logo->find('list');
		$this->set(compact('miclochorzs', 'miclocverts', 'logos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Micloc', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Micloc->save($this->data)) {
				$this->Session->setFlash(__('The Micloc has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Micloc could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Micloc->read(null, $id);
		}
		$miclochorzs = $this->Micloc->Miclochorz->find('list');
		$miclocverts = $this->Micloc->Miclocvert->find('list');
		$logos = $this->Micloc->Logo->find('list');
		$this->set(compact('miclochorzs','miclocverts','logos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Micloc', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Micloc->del($id)) {
			$this->Session->setFlash(__('Micloc deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>