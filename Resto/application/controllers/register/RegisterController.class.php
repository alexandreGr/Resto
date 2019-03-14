<?php

class RegisterController
{
	public function httpGetMethod(Http $http, array $queryFields)
    {
<<<<<<< HEAD
=======
    	session_start();

>>>>>>> 4174de5fb843a021f5c090edf1e28661376a9ac9
		if(empty($_GET) == false) {
	
		$user = new UserModel();
		$user->addUser($queryFields);

		var_dump($queryFields);
    }
}

    public function httpPostMethod(Http $http, array $formFields)
    {
<<<<<<< HEAD
=======

		session_start();

>>>>>>> 4174de5fb843a021f5c090edf1e28661376a9ac9
		if(empty($_POST) == false) {
	
		$user = new UserModel();
		$user->addUser($formFields);

		var_dump($formFields);
	}


}
}