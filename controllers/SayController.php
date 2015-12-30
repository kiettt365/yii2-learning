<?php

namespace app\controllers;

use yii\web\Controller;

class SayController extends Controller
{
    public function actionIndex($name, $message = 'Hello')
    {
        return $this->render('say', [
        	'greet' => $message, // array element, key => value
        	'name' => $name,
    	]);
    }

    public function actionInscrease($a, $b = 1)
    {
    	return $a + $b;
    }
}
