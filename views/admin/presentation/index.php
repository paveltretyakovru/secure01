<?php
/* @var $this yii\web\View */
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
?>
<h1>Загрузка презентации</h1>

  <a target="_blank" href="/pdf/pdf_example.pdf">
    Открыть текущую презентацию
  </a>

<p>
  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

  <?= $form->field($model, 'file')->fileInput() ?>

  <button>Отправить</button>

  <?php ActiveForm::end() ?>
</p>

<div class="alert alert-info" role="alert">
  Файл презентации должен быть в формате PDF
</div>
