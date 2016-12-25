
<?php
  use yii\helpers\Html;
 ?>

<div class="header__wrapper">
  <a href="javascript: void(null);" class="logo">
      <img src="/img/logo_ogon.png" alt="logo">
  </a>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="header">
          <div class="row navigation ">

            <div class="col-xs-6 pull-left">
              <div class="row">

                <!-- Left main menu items -->
                <?php for($i = 0; $i < round(count($pages) / 2); $i++) : ?>

                  <?php
                    // Вытаскиваем статьи для разделов
                    $pages[$i]['subpages'] = array_filter(
                      $subpages, function($var) use ($pages, $i) {
                        return $pages[$i]['id'] == $var['page_id'];
                      }
                    );
                    $pages[$i]['main_post'] = reset(array_filter(
                      $subpages, function($var) use ($pages, $i) {
                        return $pages[$i]['post_id'] == $var['id'];
                      }
                    ));
                  ?>

                  <div class="col-xs-4 pull-left text-right navigation__item" data-target="#left-menu-items-<?=$i?>">
                    <span>
                      <?=
                        Html::a(
                          $pages[$i]['title'],
                          ['pages/view', 'id' => $pages[$i]['id']]
                        );
                      ?>
                    </span>

                    <?php if(count($pages[$i]['subpages'])): ?>
                      <!-- Submenu links -->
                      <div class="navigation__panel" id="#left-menu-items-<?=$i?>">
                        <div class="row">

                          <div class="col-md-9 text-center">
                            <div class="row">
                                <!-- Submenu links -->
                                <?php foreach($pages[$i]['subpages'] as $subpage):?>
                                  <!-- Posts links list -->
                                  <div class="col-md-3">
                                    <?= Html::a(
                                      $subpage['title'],
                                      ['posts/view', 'id' => $subpage['id']]
                                    ); ?>
                                  </div>
                                <?php endforeach; ?>

                            </div>
                          </div>

                          <!-- Submenu post -->
                          <?php if(!empty($pages[$i]['main_post'])): ?>
                            <div class="col-md-3 text-left">
                              <?= Html::img(
                                '/media/'. $pages[$i]['main_post']['image'],
                                ['width' => '100%']
                              ); ?>

                              <h3><?= $pages[$i]['main_post']['title']; ?></h3>
                              <p><?= $pages[$i]['main_post']['desc']; ?></p>
                              <a href="#" class="cta">Заказать</a>
                            </div>
                          <?php endif; ?>

                        </div>
                      </div>
                    <?php endif; ?>
                  </div><!-- ./.navigation__item -->
                <?php endfor; ?>

              </div>
            </div>

            <div class="col-xs-6 pull-right ">
              <div class="row">

                <!-- Right mmain menu items -->
                <?php for($i = round(count($pages) / 2); $i < count($pages); $i++) : ?>

                  <!-- Submenu links -->
                  <?php
                    // Вытаскиваем статьи для разделов
                    $pages[$i]['subpages'] = array_filter(
                      $subpages, function($var) use ($pages, $i) {
                        return $pages[$i]['id'] == $var['page_id'];
                      }
                    );
                    $pages[$i]['main_post'] = reset(array_filter(
                      $subpages, function($var) use ($pages, $i) {
                        return $pages[$i]['post_id'] == $var['id'];
                      }
                    ));
                  ?>

                  <div class="col-xs-4 pull-left text-left navigation__item" data-target="#right-menu-items-<?=$i?>">
                    <span>
                      <?=
                        Html::a(
                          $pages[$i]['title'],
                          ['pages/view', 'id' => $pages[$i]['id']]
                        );
                      ?>
                    </span>

                    <?php if(count($pages[$i]['subpages'])): ?>

                      <!-- Submenu links -->
                      <div class="navigation__panel" id="right-menu-items-<?=$i?>">
                        <div class="row">

                          <div class="col-md-9 text-center">
                            <div class="row">

                                <?php foreach($pages[$i]['subpages'] as $subpage):?>
                                  <!-- Posts links list -->
                                  <div class="col-md-3">
                                    <?= Html::a(
                                      $subpage['title'],
                                      ['posts/view', 'id' => $subpage['id']]
                                    ); ?>
                                  </div>
                                <?php endforeach; ?>

                            </div>
                          </div>

                          <!-- Submenu post -->
                          <?php if(!empty($pages[$i]['main_post'])): ?>
                            <div class="col-md-3 text-left">
                              <?= Html::img(
                                '/media/'. $pages[$i]['main_post']['image'],
                                ['width' => '100%']
                              ); ?>

                              <h3><?= $pages[$i]['main_post']['title']; ?></h3>
                              <p><?= $pages[$i]['main_post']['desc']; ?></p>
                              <a href="#" class="cta">Заказать</a>
                            </div>
                          <?php endif; ?>

                        </div>
                      </div>

                    <?php endif; /* count($pages[$i]['subpages']) */ ?>
                  </div> <!-- ./.navigation__item -->
                <?php endfor; /* for($pages) */ ?>

              </div>
            </div>

          </div>
          <div class="row navigation__sub">
            <div class="col-xs-6 pull-left text-right navigation__item--sub">
              <a href="mailto:bez-01@bk.ru" class="mail-link">
                bez-01@bk.ru
              </a>
              <div class="sub-menu" id="mobile-menu">
                Меню
              </div>
            </div>
            <div class="col-xs-6 pull-right text-left navigation__item--sub">
              <a target="_blank" href="/pdf/pdf_example.pdf" class="presentation__link">
                Презентация
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
