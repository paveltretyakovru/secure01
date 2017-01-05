<?php

namespace app\controllers;

use Yii;
use app\models\Offer;
use Common\components\BaseLayoutHelpers;

class OffersController extends \yii\web\Controller
{
  public function actionTest()
  {
    BaseLayoutHelpers::sendEmails();
  }

    public function actionCreate()
    {
      \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
      $model = new Offer();
      $model->load(Yii::$app->request->post(), '');

      if ($model->validate()) {

        // !!!! Рассылка email
        $emailsText = 'Пришёл оффер с заказом, от '.$model->type.' c id='.$model->type_id;
        BaseLayoutHelpers::sendEmails($emailsText);

        $model->save();
        return ['success' => true];
      } else {
        return ['success' => false, $model->errors];
      }
    }

}
