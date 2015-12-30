<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class OrderFoodController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHelloWorld()
    {
        return $this->render('hello-world');
    }    
}
