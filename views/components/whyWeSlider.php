<?php
/* @var $slides app\models\Slide */
?>
<div class="carousel">
  <div class="carousel__wrapper">
    <div class="row ">
      <div class="col-xs-12">
        <div class="swiper-container">
          <div class="swiper-wrapper">

            <!-- repeat .swiper-slide for slider content -->
            <?php foreach($slides as $slide): ?>
              <div class="swiper-slide">
                <div class="slide slide1">
                  <div class="slider__text">
                    <h3>
                      <?= $slide->title ?>
                    </h3>
                    <p>
                      <?= $slide->body ?>
                    </p>
                    <a href="#" data-source="sliders" data-source-id="<?= $slide->id ?>" class="cta">
                      Заказать
                    </a>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

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
  </div>
</div>
