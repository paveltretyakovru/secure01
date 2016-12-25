<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = $post->title;
?>

<?= $this->render('../components/title', ['title' => $this->title]) ?>

<div class="row">
  <div class="col-md-12">
      <?= $post->longdesc ?>
  </div>
</div>
