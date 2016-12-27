<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ourwork */

$this->title = 'Добавить "наша работа"';
$this->params['breadcrumbs'][] = ['label' => 'Ourworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ourwork-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
