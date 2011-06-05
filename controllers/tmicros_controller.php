<?php
class TmicrosController extends AppController {

	var $name = 'Tmicros';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Tmicro->recursive = 0;
		$this->set('tmicros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tmicro.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tmicro', $this->Tmicro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tmicro->create();
			if ($this->Tmicro->save($this->data)) {
				$this->Session->setFlash(__('The Tmicro has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tmicro could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Tmicro', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tmicro->save($this->data)) {
				$this->Session->setFlash(__('The Tmicro has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Tmicro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tmicro->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Tmicro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tmicro->del($id)) {
			$this->Session->setFlash(__('Tmicro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>