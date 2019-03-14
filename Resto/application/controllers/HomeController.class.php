<?php

class HomeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */
<<<<<<< HEAD
         $mealModel = new MealModel();
         $meals = $mealModel->listing();
         return ['meals' => $meals];
=======
        $mealModel = new MealsModel();
        $meals = $mealModel->listMeals();
        return ['meals' => $meals];
>>>>>>> 4174de5fb843a021f5c090edf1e28661376a9ac9
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}