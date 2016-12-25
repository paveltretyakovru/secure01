<?php
  use yii\helpers\Html;

  $no_image = 'http://bleachexim.com/Admin/Gallery_img/image-not-available.jpg';

  $image = Html::img(
      (!empty($post->image) ? '/media/' . $post->image : $no_image),
      ['width' => '100%', 'alt' => $post->title]
  );
?>

<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <?= Html::a($image, ['posts/view', 'id' => $post->id]) ?>

  <h3><?= $post->title ?></h3>
  <p><?= strip_tags($post->desc) ?></p>
</div>
