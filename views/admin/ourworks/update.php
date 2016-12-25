<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ourwork */

$this->title = 'Update Ourwork: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Ourworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ourwork-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
