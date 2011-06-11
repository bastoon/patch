<?php
class WedgelocsController extends AppController {

	var $name = 'Wedgelocs';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Wedgeloc->recursive = 0;
		$this->set('wedgelocs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Wedgeloc.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('wedgeloc', $this->Wedgeloc->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Wedgeloc->create();
			if ($this->Wedgeloc->save($this->data)) {
				$this->Session->setFlash(__('The Wedgeloc has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgeloc could not be saved. Please, try again.', true));
			}
		}
		$wedgelochorzs = $this->Wedgeloc->Wedgelochorz->find('list');
		$wedgelocverts = $this->Wedgeloc->Wedgelocvert->find('list');
		$wedgelocrotations = $this->Wedgeloc->Wedgelocrotation->find('list');
		$this->set(compact('wedgelochorzs', 'wedgelocverts', 'wedgelocrotations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Wedgeloc', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Wedgeloc->save($this->data)) {
				$this->Session->setFlash(__('The Wedgeloc has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Wedgeloc could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Wedgeloc->read(null, $id);
		}
		$wedgelochorzs = $this->Wedgeloc->Wedgelochorz->find('list');
		$wedgelocverts = $this->Wedgeloc->Wedgelocvert->find('list');
		$wedgelocrotations = $this->Wedgeloc->Wedgelocrotation->find('list');
		$this->set(compact('wedgelochorzs','wedgelocverts','wedgelocrotations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Wedgeloc', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Wedgeloc->delete($id)) {
			$this->Session->setFlash(__('Wedgeloc deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>