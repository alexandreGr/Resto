<?php

class LoginController {

    public function httpGetMethod(Http $http, array $queryFields)
    {
    	
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        $user = new UserModel();
        $user->connectUser($formFields);
    }
}