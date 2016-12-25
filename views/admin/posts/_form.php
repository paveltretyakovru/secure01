<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */

$tinyOptions = [
  'options' => ['rows' => 6],
  'language' => 'ru',
  'clientOptions' => [
      'plugins' => [
          "advlist autolink lists link charmap print preview anchor image",
          "searchreplace visualblocks code fullscreen",
          "insertdatetime media table contextmenu paste"
      ],
      'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      'height' => 300,
  ]
];

?>

<div class="post-form" style="padding-bottom: 60px;">

    <?php $form = ActiveForm::begin([
      'options' => [
        'enctype' => 'multipart/form-data'
      ],
    ]); ?>

    <?= $form->field($model, 'page_id')->dropDownList($pages); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <p>
      Текущее изображение:<br />
      <?=
        (!empty($model->image))
          ? Html::img('/media/'. $model->image,['height' => 100])
          : 'Изображение не установлено';
      ?>
    </p>

    <?= $form->field($model, 'desc')->textarea(['rows' => 5]); ?>

    <?=
      // $form->field($model, 'longdesc')->textarea(['rows' => 6])
      $form->field($model, 'longdesc')
        ->widget(TinyMce::className(), $tinyOptions);
    ?>

    <br />

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
