<?php

namespace app\controllers;

class CallbacksController extends \yii\web\Controller
{
    public $layout = 'secure01';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
