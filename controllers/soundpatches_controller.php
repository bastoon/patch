<?php
class SoundpatchesController extends AppController {

	var $name = 'Soundpatches';
	var $helpers = array('Html', 'Form');
	var $components = array('Patch');

	function index() {
		if($this->Auth->user()){
			$this->Soundpatch->recursive = 0;
			$this->paginate = array(
                                'conditions' => array('Soundpatch.user_id' => $this->Patch->getId()),
                                'order' => 'Soundpatch.title ASC',
			);
			$this->set('soundpatches', $this->paginate());
			$this->set(compact('soundpatches'));
		}

	}

	function view($id = null) {
		if($this->Auth->user()){
			if (!$id) {
				$this->Session->setFlash(__('Invalid Soundpatch.', true));
				$this->redirect(array('action'=>'index'));
			}
			$this->Soundpatch->recursive = 2;
			$this->set('soundpatch', $this->Soundpatch->read(null, $id));
			if ( ! $this->Patch->IsOwner($this->Soundpatch) ) {
				$this->redirect(array('controller' => 'users', 'action'=>'bo_accueil'));
				$this->Session->setFlash(__('Not your items', true));
			}
		} else {
			$this->redirect(array('action'=>'login'));
			$this->Session->setFlash(__('Acces reserve aux membres', true));
		}

	}

	function add() {
		if (!empty($this->data)) {
			$this->Soundpatch->create();
			if ($this->Soundpatch->save($this->data)) {
				$this->Session->setFlash(__('The Soundpatch has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Soundpatch could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Soundpatch->User->find('list');
		$wedges = $this->Soundpatch->Wedge->find('list');
		$this->set(compact('users', 'wedges'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Soundpatch', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Soundpatch->save($this->data)) {
				$this->Session->setFlash(__('The Soundpatch has been saved', true));
				//$this->redirect(array('action'=>'index'));
				$this->redirect($this->referer());

			} else {
				$this->Session->setFlash(__('The Soundpatch could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Soundpatch->read(null, $id);
		}
		$users = $this->Soundpatch->User->find('list');
		$wedges = $this->Soundpatch->Wedge->find('list');
		$this->set(compact('users','wedges'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Soundpatch', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Soundpatch->delete($id)) {
			$this->Session->setFlash(__('Soundpatch deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
