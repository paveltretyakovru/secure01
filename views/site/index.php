<?php
  /* @var $this yii\web\View */
  $this->title = 'My Yii Application';
?>

<div class="main">
  <div class=" container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Index page</h1>
      </div>
    </div>
  </div>
</div>

<?= $this->render('../components/aboutUsSlider', []);
