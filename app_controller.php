<?php
class AppController extends Controller {

	var $components = array('Session','Auth','ControllerList','Email');
	var $helpers = array ('Html','Form','Session', 'I18n');

	function beforeFilter(){
		$this->Auth();
		$this->AclInit();
		$this->AclCharge();
		$this->i18nSession();
	}
	/*
	 * Gère la langue
	 * */
	 function i18nSession(){
		if (!$this->Session->read('User.language')){
			$this->Session->write('User.language',Configure::read('Config.language'));
		}
		if (isset($this->params['language'])){
			if (in_array($this->params['language'], Configure::read('Config.languages'))){
				$this->Session->write('User.language',$this->params['language']);
			}
		}
		Configure::write('Config.language', $this->Session->read('User.language'));
		$this->params['language'] = $this->Session->read('User.language');
	 }

	/*
	 * Gère l'authentification
	 * @param       -
	 * @return      -
	 **/
	function Auth(){
		// On refuse l'accès à tout
		$this->Auth->deny('*');
		// Adaptation des variables à notre modèle
		$this->Auth->userModel = 'User';
		$this->Auth->userScope = array('User.actif' =>1);
		$this->Auth->fields = array(
           'username' => 'email',
           'password' => 'password'
           );
           // Configuration de Auth
           $this->Auth->loginAction = array( 'controller' => 'users', 'action' => 'login');
           $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'bo_accueil');
           $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
           $this->Auth->loginError = __('Identifiant ou mot de passe incorrects.',true);
           $this->Auth->authError = __('Désolé, vous n\'avez pas les droits suffisants.',true);
           $this->Auth->authError = __('Désolé, la session est terminée. Vous pouvez vous reconnectez.',true);
	}

	/*
	 * Initialise les valeurs d'ACL
	 * @param       -
	 * @return      -
	 **/
	function AclInit(){

		$acl_init = Cache::read('acl_init');
		if(empty($acl_init)){

			// On crée une valeur en cache pour confirmer l'initialisation de l'ACL
			Cache::write('acl_init','1');

			// Lister tous les controllers - actions
			$controllers = $this->ControllerList->get();
			$this->loadModel('Right');

			// Sélectionne les droits pour chacun des groupes
			$this->loadModel('Admingroupe');
			$this->Admingroupe->recursive = 0;
			$groupes = $this->Admingroupe->find('all');

			// Parcours les groupes
			foreach($groupes as $groupe){
				$admingroupe_id = $groupe['Admingroupe']['id'];
				// Parcours les controllers
				foreach($controllers as $controller_nom=>$c){
					// Parcours les actions
					foreach($c as $controller_action){
						// Vérifie si un ACL existe déjà pour le groupe - controller - action, sinon ajout dans la table
						$res = $this->Right->find('first',array('conditions'=>array('controller'=>$controller_nom,'action'=>$controller_action,'admingroupe_id'=>$admingroupe_id)));
						if(empty($res)){
							$this->data = $this->Right->create();
							$this->data['Right']['admingroupe_id'] = $admingroupe_id;
							$this->data['Right']['controller'] = $controller_nom;
							$this->data['Right']['action'] = $controller_action;
							$this->data['Right']['autorise'] = 1;
							$this->Right->save($this->data);
						}
						// Vérifie si un ACL existe pour les visiteurs
						$res = $this->Right->find('first',array('conditions'=>array('controller'=>$controller_nom,'action'=>$controller_action,'admingroupe_id'=>'visiteur')));
						if(empty($res)){
							$this->data = $this->Right->create();
							$this->data['Right']['admingroupe_id'] = 'visiteur';
							$this->data['Right']['controller'] = $controller_nom;
							$this->data['Right']['action'] = $controller_action;
							$this->data['Right']['autorise'] = 1;
							$this->Right->save($this->data);
						}
					}
				}
			}
		} // endif empty cache
	}

	/*
	 * Charge l'ACL
	 * @param       -
	 * @return      -
	 **/
	function AclCharge(){
		$this->loadModel('Right');
		$this->Right->recursive = 0;

		// Si c'est un utilisateur logué

		if($this->Auth->user()){

			//  On lit l'utilisateur et son appartenance au groupe
			$user = $this->Session->read('acl_user');
			if(empty($user)){
				$this->loadModel('User');
				$this->User->recursive = 0;
				$this->User->id = $this->Auth->User('id');
				$user = $this->User->read();
				$this->Session->write('acl_user',$user);
			}

			$admin = $user['Admingroupe']['admin'];
			$groupe_id = $user['User']['admingroupe_id'];

			// Si Admin -> accès complet
			if($admin==1){
				$this->Auth->allow('*');
				// Sinon permissions pour le groupe utilisateur connecté
			}else{
				$droits = Cache::read('acl_droits_users_admingroupe_id_'.$groupe_id);
				if(empty($droits)){
					//echo "Empty rights";
					// On récupère les droits utilisateurs
					$droits = $this->Right->find('all',array('conditions'=>array('Right.admingroupe_id'=>$groupe_id,'autorise'=>1)));
					Cache::write('acl_droits_users_admingroupe_id_'.$groupe_id,$droits);
				}
				foreach($droits as $key=>$droit){
					$this->Auth->authorize = $droit['Right']['controller'];
					$this->Auth->allow($droit['Right']['action']);
				}
			}
			// Si c'est un visiteur
		}else{
			$droits = Cache::read('acl_droits_visiteurs_admingroupe_id_visiteur');
			if(empty($droits)){
				$droits = $this->Right->find('all',array('conditions'=>array('Right.admingroupe_id'=>'visiteur','autorise'=>1)));
				Cache::write('acl_droits_visiteurs_admingroupe_id_visiteur',$droits);
			}
			foreach($droits as $droit){
				$this->Auth->authorize = $droit['Right']['controller'];
				$this->Auth->allow($droit['Right']['action']);
			}
		}
	}

}
?>
