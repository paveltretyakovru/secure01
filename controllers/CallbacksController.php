<?php

namespace app\controllers;

use Yii;
use app\models\Callback;

class CallbacksController extends \yii\web\Controller
{
    public function actionCreate()
    {
      \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
      $model = new Callback();
      $model->load(Yii::$app->request->post(), '');

      if ($model->validate()) {
        $model->save();
        return ['success' => true];
      } else {
        return ['success' => false, $model->errors];
      }
    }

}
