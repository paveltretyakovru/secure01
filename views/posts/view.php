<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $post->title;
?>

<div class="main">
  <div class=" container">
    <div class="row">
      <div class="col-xs-12">

        <!-- Подключаем заголовок -->
        <?= $this->render('../components/title', ['title' => $this->title]) ?>

        <?= $post->longdesc ?>

      </div>
    </div>
  </div>
</div>
