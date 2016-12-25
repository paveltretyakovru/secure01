<?php

namespace app\controllers;

class PagesController extends \yii\web\Controller
{
    public function actionView()
    {
        return $this->render('view');
    }

}
