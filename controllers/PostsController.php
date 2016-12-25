<?php

namespace app\controllers;

class PostsController extends \yii\web\Controller
{
    public function actionView()
    {
        return $this->render('view');
    }

}
