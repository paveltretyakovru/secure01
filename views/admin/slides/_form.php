<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

$tinyOptions = \yii::$app->controller->getTinyOptions();

/* @var $this yii\web\View */
/* @var $model app\models\Slide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slide-form">

  <?php $form = ActiveForm::begin(); ?>

  <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

  <?=
    $form->field($model, 'body')
      ->widget(TinyMce::className(), $tinyOptions);
  ?>

  <div class="form-group">
      <?=
        Html::submitButton(
          $model->isNewRecord ? 'Создать' : 'Сохранить',
          [
            'class' => $model->isNewRecord
              ? 'btn btn-success'
              : 'btn btn-primary',
            'style' => 'margin-bottom: 40px',
          ]
        )
      ?>
  </div>

  <?php ActiveForm::end(); ?>

</div>
