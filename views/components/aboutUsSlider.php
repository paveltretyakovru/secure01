<?php
  use Common\components\BaseLayoutHelpers;

  $ourworks = BaseLayoutHelpers::getOurworks();
?>

<div class="slider">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <h1>
          Наши работы
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 slider__wrapper">
        <div class="swiper-container2">
          <div class="swiper-wrapper">

            <!-- Перебираем массив с работами -->
            <?php foreach($ourworks as $ourwork): ?>
              <div class="swiper-slide">
                <iframe
                  width="560"
                  height="315"
                  src="https://www.youtube.com/embed/<?= $ourwork['video_id'] ?>"
                  frameborder="0" allowfullscreen></iframe>
              </div>
            <?php endforeach; ?>

            <!-- <div class="swiper-slide">
              <img src="/img/img_slider.png" alt="">
            </div> -->
          </div>
          <div class="swiper-button-prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          </div>
          <div class="swiper-button-next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 text-left">
        <a href="javascript: void(null);" data-source="ourworks" class="cta">
          Заказать
        </a>
      </div>
    </div>
  </div>
</div>
