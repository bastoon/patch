<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $components = array('Patch');

	function beforeFilter(){
		parent::beforeFilter();
	}

	/*
	 * Action reservÃ©e aux utilisateurs logués
	 * @param    -
	 * @return   -
	 **/

	function bo_accueil(){
		if($this->Auth->user()){
			$this->set('Username', $this->Patch->getUsername());
			$this->set('IsAdmin',$this->Patch->IsAdmin());
			$this->set('Id',$this->Patch->getId());
		}
	}

	/*
	 * Action reservÃ©e aux utilisateurs loguÃ©s & du groupe membre
	 * @param    -
	 * @return   -
	 **/
	function bo_action_admin(){
		if($this->Auth->user()){
			$this->set('Username', $this->Patch->getUsername());
			$this->set('IsAdmin',$this->Patch->IsAdmin());
			$this->set('Id',$this->Patch->getId());
		}
		//		print_r($this->params);
	}

	/*
	 * Login
	 * @param    -
	 * @return   -
	 **/
	function login(){
		// VÃ©rifie que le compte est activÃ© (basÃ© sur l'userscope)
		if($this->action == 'login' && !empty($this->data['User']['email'])){
			$conditions = array('email' => $this->data['User']['email'], 'actif <>' => 1);
			if($this->User->find('count', array('conditions' => $conditions))){
				$this->Session->setFlash(__('Votre compte n\'a pas Ã©tÃ© activÃ©',true), 'default', array(), 'auth');
			}
		}
	}

	/*
	 * Logout
	 * @param    -
	 * @return   -
	 **/
	function logout(){
		$this->Session->delete('acl_user');
		$this->redirect($this->Auth->logout());
	}

	function validmail($id = null){
		if (!empty($this->params['url']['token'])) {
			$UserId = $this->User->find('first', array('conditions' => array('User.token' =>  $this->params['url']['token'])));
			if ($UserId['User']['id']){
				$this->User->read(null, $UserId['User']['id']);
				$this->User->set('actif','1');
				$this->User->set('token', null);
				$this->User->save();
				// Create contact/ SoundPatch / Tracks
				$this->tpl_pack_1p_12t_5c($UserId['User']['id'], 'Pack de base');
				$this->redirect($this->Auth->login());
			} else {
				$this->Session->setFlash(__('TOKEN not FOUND !', true));
			}
		}
	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			$token = $this->Patch->getToken();
			$this->User->set('token', $token);
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->Patch->sendInviteMail($this->data['User']['email'], $token);
				$this->Session->setFlash('Veuillez consulter votre mail pour activer votre compte en ciquant sur le lien.');
				$this->redirect(array('action'=>'login'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		$admingroupes = $this->User->Admingroupe->find('list');
		$this->set(compact('admingroupes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'bo_accueil'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groupes = $this->User->Admingroupe->find('list');
		$this->set(compact('admingroupes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	private function tpl_pack_1p_12t_5c($id, $name) {
		$this->tpl_contact_5($id);
		$this->tpl_patch_1p_12t($id, $name);
	}

	private function tpl_patch_1p_12t($id, $name) {
		$this->tpl_create_patch($id, 1, 12, $name);
	}

	private function tpl_create_patch($id, $nb_p, $nb_t, $name = null){
		for( $i = 0; $i < $nb_p; $i++ ) {
			$this->User->Soundpatch->create();
			$this->User->Soundpatch->set('title',$name);
			$this->User->Soundpatch->set('user_id',$id);
			$this->User->Soundpatch->save();
			$new_soundpatch_id = $this->User->Soundpatch->id;
			$this->tpl_create_track($id, $nb_t, $new_soundpatch_id);
		}
	}

	private function tpl_create_track($id, $nb, $sp_id){
		for( $i = 1; $i < $nb+1; $i++ ) {
			$this->User->Soundpatch->Track->create();
			$this->User->Soundpatch->Track->set('rank',$i);
			$this->User->Soundpatch->Track->set('soundpatch_id',$sp_id);
			$this->User->Soundpatch->Track->save();
		}
	}

	private function tpl_create_contact($id, $nb){
		for( $i = 0; $i < $nb; $i++ ) {
			$this->User->Contact->create();
			$this->User->Contact->set('name','Nom du contact');
			$this->User->Contact->set('email','');
			$this->User->Contact->set('phone','');
			$this->User->Contact->set('user_id',$id);
			$this->User->Contact->save();
		}
	}

	private function tpl_contact_5($id) {
		$this->tpl_create_contact($id, 5);
	}
}
?>
