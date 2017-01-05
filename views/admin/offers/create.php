<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Offer */

$this->title = 'Созать заказ';
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'types' => $types,
    ]) ?>

</div>
