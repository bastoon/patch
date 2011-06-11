<?php
class LightsController extends AppController {

	var $name = 'Lights';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Light->recursive = 0;
		$this->set('lights', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Light.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('light', $this->Light->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Light->create();
			if ($this->Light->save($this->data)) {
				$this->Session->setFlash(__('The Light has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Light could not be saved. Please, try again.', true));
			}
		}
		$tlights = $this->Light->Tlight->find('list');
		$users = $this->Light->User->find('list');
		$lightlocs = $this->Light->Lightloc->find('list');
		$lightcolors = $this->Light->Lightcolor->find('list');
		$this->set(compact('tlights', 'users', 'lightlocs', 'lightcolors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Light', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Light->save($this->data)) {
				$this->Session->setFlash(__('The Light has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Light could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Light->read(null, $id);
		}
		$tlights = $this->Light->Tlight->find('list');
		$users = $this->Light->User->find('list');
		$lightlocs = $this->Light->Lightloc->find('list');
		$lightcolors = $this->Light->Lightcolor->find('list');
		$this->set(compact('tlights','users','lightlocs','lightcolors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Light', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Light->delete($id)) {
			$this->Session->setFlash(__('Light deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>