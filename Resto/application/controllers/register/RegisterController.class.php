<?php

class RegisterController
{
	public function httpGetMethod(Http $http, array $queryFields)
    {
    	session_start();

		if(empty($_GET) == false) {
	
		$user = new UserModel();
		$user->addUser($queryFields);

		var_dump($queryFields);
    }
}

    public function httpPostMethod(Http $http, array $formFields)
    {

		session_start();

		if(empty($_POST) == false) {
	
		$user = new UserModel();
		$user->addUser($formFields);

		var_dump($formFields);
	}


}
}