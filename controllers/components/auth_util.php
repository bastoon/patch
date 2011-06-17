<?php
class AuthUtil {
	var $components = array('Auth','Email');

	public function getUsername(){
		$aUser = $this->Auth->user();
		return $aUser['User']['name'];
	}

	public function getAdmingroup(){
		$aUser = $this->Auth->user();
		return $aUser['User']['admingroupe_id'];
	}

	public function getCurrentUserId(){
		$aUser = $this->Auth->user();
		return $aUser['User']['id'];

	}

	public function IsAdmin(){
		if ( $this->getAdmingroup() == '1' ){
			$IsAdmin = True;
		} else {
			$IsAdmin = False;
		}
		return $IsAdmin;
	}

	public function IsOwner($Current_Controller){
		$IsOwner = False;
		$Controller_name = ucfirst($Current_Controller->name);
		$BelongsTo = $Current_Controller->belongsTo['User']['foreignKey'];
		$Owner_id = $Current_Controller->data[ $Controller_name ][ $BelongsTo ];
		if ( $Owner_id == $this->getId() ) { $IsOwner = True; }
		if ( $this->IsAdmin() ) { $IsOwner = True; }
		return $IsOwner;
	}
}