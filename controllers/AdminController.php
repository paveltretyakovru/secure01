<?php namespace app\controllers;

use yii\filters\AccessControl;

class AdminController extends \yii\web\Controller
{
  public $layout = 'secure01Admin';
  public $defaultAction = 'action';

  public function behaviors() {
    return [
      'access' => [
        'class' => AccessControl::className(),
        'rules' => [
          [
            'allow' => true,
            'roles' => ['@'],
          ],
        ],
      ],
    ];
  }

  public function actionIndex() {
    return $this->render('index');
  }

  // public function actionPages() {
  //   return 'isset :)';
  // }
}
