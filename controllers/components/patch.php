<?php
class PatchComponent extends Object {
	var $components = array('Auth','Email');

	public function getUsername(){
		$aUser = $this->Auth->user();
		return $aUser['User']['name'];
	}

	public function getAdmingroup(){
		$aUser = $this->Auth->user();
		return $aUser['User']['admingroupe_id'];
	}

	public function getId(){
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

	public function sendInviteMail($to, $token) {
		$body[0] = 'Welcome ';
		$body[1] = 'http://patch.weth.li/users/validmail?token='.$token;
		$subject = 'Inscription';
		if ( $this->sendMail($to, $body, $subject) ) {
			$body[0] = "Nouvel inscrit : ".$to;
			$this->sendMail('bastoon@bastoon.ch', $body, $subject);
			return True;
		} else {
			return False;
		}
	}

	private function sendMail($to, $body, $subject){
		$this->Email->reset();
		$this->Email->to = $to;
		$this->Email->subject = $subject;
		$this->Email->replyTo = 'patch@weth.li';
		$this->Email->from = 'Fiche Technique <'.$this->Email->replyTo.'>';
		if ( $this->Email->send($body) ) {
			return True;
		} else {
			return False;
		}
	}


	public function getToken(){
		return $this->getRandomString(24);
	}


	private function getRandomString($length) {
		$chars = "123456789ABCDEFGHIJKLMNPQRSTUVWXYZ";
		$size = strlen( $chars );
		$str = null;
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		return $str;
	}
}
