<?php

namespace app\controllers\admin;

use Yii;
use yii\web\UploadedFile;
use app\models\UploadPresentation;

class PresentationController extends \yii\web\Controller
{
  public $layout = 'secure01Admin';

  public function actionIndex()
  {
    $model = new UploadPresentation();

    if(Yii::$app->request->isPost) {
      $model->file = UploadedFile::getInstance($model, 'file');

      if($model->file && $model->validate()) {
        $filename = Yii::getAlias('@webroot/pdf/') .'pdf_example.pdf';
        $model->file->saveAs($filename);
      }
    }

    return $this->render('index', ['model' => $model]);
  }

}
