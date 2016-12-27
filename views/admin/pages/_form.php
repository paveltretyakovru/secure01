<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_id')->dropDownList($posts); ?>

    <?=
      $form->field($model, 'body')
        ->widget(
          TinyMce::className(),
          \yii::$app->controller->getTinyOptions()
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
