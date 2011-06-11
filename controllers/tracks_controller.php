<?php
class TracksController extends AppController {

	var $name = 'Tracks';
	var $helpers = array('Html', 'Form');
	var $components = array('Patch');

	function index() {
		$this->Track->recursive = 0;
		$this->set('tracks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Track.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('track', $this->Track->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Track->create();
			if ($this->Track->save($this->data)) {
				$this->Session->setFlash(__('The Track has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Track could not be saved. Please, try again.', true));
			}
		}
		$contacts = $this->Track->Contact->find('list');
		$soundpatches = $this->Track->Soundpatch->find('list');
		$instruments = $this->Track->Instrument->find('list');
		$micros = $this->Track->Micro->find('list');
		$tinserts = $this->Track->Tinsert->find('list');
		$teffects = $this->Track->Teffect->find('list');
		$stands = $this->Track->Stand->find('list');
		$miclocs = $this->Track->Micloc->find('list');
		$this->set(compact('contacts', 'soundpatches', 'instruments', 'micros', 'tinserts', 'teffects', 'stands', 'miclocs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Track', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Track->save($this->data)) {
				$this->Session->setFlash(__('The Track has been saved', true));
				$view_id =  "view/".$this->data['Track']['soundpatch_id'];
				$this->redirect(array('controller' => 'soundpatches', 'action' => $view_id));
				// $this->redirect($this->referer());

			} else {
				$this->Session->setFlash(__('The Track could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Track->read(null, $id);
		}
		$contacts = $this->Track->Contact->find('list', array('conditions' => array('OR' => array('Contact.user_id =' => $this->Patch->getId(), 'Contact.id =' => '1' ) ) ));
		$instruments = $this->Track->Instrument->find('list');
		$micros = $this->Track->Micro->find('list');
		$tinserts = $this->Track->Tinsert->find('list');
		$teffects = $this->Track->Teffect->find('list');
		$stands = $this->Track->Stand->find('list');
		$miclocs = $this->Track->Micloc->find('list');
		$this->set(compact('contacts','soundpatches','instruments','micros','tinserts','teffects','stands','miclocs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Track', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Track->delete($id)) {
			$this->Session->setFlash(__('Track deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
}
?>
