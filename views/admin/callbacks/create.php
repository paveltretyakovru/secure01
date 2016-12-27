<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Callback */

$this->title = 'Создать заявку обратного вызова';
$this->params['breadcrumbs'][] = ['label' => 'Обратные звонки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="callback-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
