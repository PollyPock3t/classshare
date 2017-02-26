<?php

//User Manager Handles User Management tasks such as Registration, Password Resets, Login, etc.
//

class UserManager{
	private $dbCon 					= false;
	private $db 					= false;
	private $sysMgr 				= false;
	private $data 					= false;

	public function __construct(){
	
	}

//////////////////PRIVATE METHODS/////////////////////////

	
	private function initiateSession( ){

	}

	private function terminateSession( ){

	}

	private function verifyUserToken( $token ){

	}

	private function getUserData( ){

	}

	private function setUserData( ){

	}

	private function userExists( ){

	}

	private function isScreenNameUnique( ){

	}

	private function isUserLoggedIn( ){

	}

	private function getNavigation(){

	}

	private function getUserRoles(){
	
	}


/////////////////////PUBLIC METHODS //////////////////////////////////

	public function me(){

	}

	public function registerUser(){
		
	}

	public function loginUser( ){
		
	}

	public function logoutUser( ){

	}

	public function getUserMetaData(){

	}

	public function setUserMetaData(){

	}

	public function verifyUser(){

	}

	public function passwordResetRequest(){

	} 

	public function verifyResetCode( ){

	}

	public function resetPassword(){

	}
}
?>