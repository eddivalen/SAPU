<?php /** * UserIdentity represents the data needed to identity a user. * It contains the authentication method that checks if the provided * data can identity the user. */
class UserIdentity extends CUserIdentity {

	private $_id;
	private $tpo_id;
	public function authenticate(){

		$username=strtolower($this->username);
		$user=Usuarios::model()->find('LOWER(username)=?',array($username));

		if($user===null){

			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if(!$user->validatePassword($this->password)){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else{

			$this->_id=$user->id;
			$this->username=$user->username;
			$this->tpo_id=$user->tpo_id;
			$this->errorCode=self::ERROR_NONE;
			 
			/*Consultamos los datos del usuario por el username ($user->username) */
		//	$info_usuario = Usuarios::model()->find('LOWER(username)=?', array($user->username));

			
		}
		return $this->errorCode==self::ERROR_NONE;
	}
	 
	public function getId(){
		return $this->_id;
	}
	 
}