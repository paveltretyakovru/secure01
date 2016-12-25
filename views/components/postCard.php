<?php
  use yii\helpers\Html;

  $no_image = 'http://bleachexim.com/Admin/Gallery_img/image-not-available.jpg';
?>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <?= Html::img(
      (!empty($post->image) ? '/media/' . $post->image : $no_image),
      ['width' => '100%', 'alt' => $post->title]
  )?>

  <h3><?= $post->title ?></h3>
  <p><?= $post->desc ?></p>
</div>
