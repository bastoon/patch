<?php
class ContactsController extends AppController {

	var $name = 'Contacts';
	var $helpers = array('Html', 'Form');
	var $components = array('Patch');

	function index() {
		if($this->Auth->user()){
			$this->Contact->recursive = 0;
			$this->paginate = array(
                        	'conditions' => array('Contact.user_id' => $this->Patch->getId()),
                        	'order' => 'Contact.name ASC',
			);
			$this->set('contacts', $this->paginate());
			$this->set(compact('contacts'));
		}
	}

	function view($id = null) {
		if($this->Auth->user()){
			if (!$id) {
				$this->Session->setFlash(__('Invalid Contact.', true));
				$this->redirect(array('action'=>'index'));
			}
			$this->set('contact', $this->Contact->read(null, $id));
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The Contact has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Contact could not be saved. Please, try again.', true));
			}
		}
		$tcontacts = $this->Contact->Tcontact->find('list');
		$users = $this->Contact->User->find('list');
		$this->set(compact('tcontacts', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Contact->save($this->data)) {
				$this->Session->setFlash(__('The Contact has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Contact->read(null, $id);
			$this->set('Id',$this->Patch->getId());
		}
		$tcontacts = $this->Contact->Tcontact->find('list');
		$users = $this->Contact->User->find('list');
		$this->set(compact('tcontacts','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Contact->delete($id)) {
			$this->Session->setFlash(__('Contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
