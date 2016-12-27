<?php
  /* @var $this yii\web\View */
  // @var $show_ourworks boolean
  $this->title = $page->title;
?>

<div class="main">
  <div class=" container">
    <div class="row">
      <div class="col-xs-12">

        <!-- Подключаем заголовок -->
        <?= $this->render('../components/title', ['title' => $this->title]) ?>

        <div class="row">
          <?php foreach($posts as $post): ?>
            <?= $this->render('../components/postCard', compact('post')) ?>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</div>

<?php if(!empty($show_ourworks) && $show_ourworks == true): ?>
  <?= $this->render('../components/aboutUsSlider', []); ?>
<?php endif; ?>
