<?php
use yii\helpers\Html;

use app\assets\Secure01Asset;

Secure01Asset::register($this);
/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
  	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  	<link rel="stylesheet" href="/css/style.css">
  	<link rel="stylesheet" href="/css/plugins.css">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

<a href="javascript: void(null);" class="callback">
  Заказать звонок
</a>

<div class="overlay">
  <div class="mobile-menu">
    <div class="row mobile-menu__header">
      <div class="col-xs-12" id="menu-title">
        Меню
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <ul>
          <li class="active">
            <a href="javascript: void(null);">
              Главная
            </a>
          </li>
          <li>
            <a href="javascript: void(null);">
              Услуги
            </a>
          </li>
          <li>
            <a href="javascript: void(null);">
              Цены
            </a>
          </li>
          <li>
            <a href="javascript: void(null);">
              Проекты
            </a>
          </li>
          <li>
            <a href="javascript: void(null);">
              Информация
            </a>
          </li>
          <li>
            <a href="javascript: void(null);">
              Контакты
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="sub__header">
  <div class="row">
    <div class="col-xs-12">
      <div class="row">
        <div class="pull-left text-left col-xs-6">
          Безопасность 01
        </div>
        <div class="pull-right text-right col-xs-6">
          <span class="phone-label">Телефон: </span>8(911)814-84-78
        </div>
      </div>
    </div>
  </div>
</div>

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
                <div class="col-xs-4 pull-left text-left navigation__item" data-target="#main">

                  <span>Главная</span>
                  <div id="main" class="navigation__panel">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          1 Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <img src="/img/prod.jpg" alt="">
                        <h3>Пожарная <br> сигнализация</h3>
                        <p>
                          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
                        </p>
                        <a href="javascript: void(null);" class="cta">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-xs-4 pull-left text-center navigation__item" data-target="#service">
                  <span>Услуги</span>
                  <div id="main" class="navigation__panel">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          1 Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <img src="/img/prod.jpg" alt="">
                        <h3>Пожарная <br> сигнализация</h3>
                        <p>
                          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
                        </p>
                        <a href="javascript: void(null);" class="cta">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4 pull-left text-right navigation__item" data-target="#main">
                  <span>Цены</span>
                  <div id="main" class="navigation__panel">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          1 Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <img src="/img/prod.jpg" alt="">
                        <h3>Пожарная <br> сигнализация</h3>
                        <p>
                          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
                        </p>
                        <a href="javascript: void(null);" class="cta">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 pull-right ">
              <div class="row">
                <div class="col-xs-4 pull-left text-left navigation__item" data-target="#service">
                  <span>Проекты</span>
                  <div id="main" class="navigation__panel">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          1 Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <img src="/img/prod.jpg" alt="">
                        <h3>Пожарная <br> сигнализация</h3>
                        <p>
                          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
                        </p>
                        <a href="javascript: void(null);" class="cta">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4 pull-left text-center navigation__item" data-target="#main">
                  <span>Информация</span>
                  <div id="main" class="navigation__panel">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          1 Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <img src="/img/prod.jpg" alt="">
                        <h3>Пожарная <br> сигнализация</h3>
                        <p>
                          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
                        </p>
                        <a href="javascript: void(null);" class="cta">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-4 pull-left text-right navigation__item" data-target="#service">
                  <span>Контакты</span>
                  <div id="main" class="navigation__panel">
                    <div class="row">
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          1 Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="javascript: void(null);">
                          Проектирование и монтаж
                        </a>
                        <a href="javascript: void(null);">
                          Техническое обслуж. систем любой сложности
                        </a>
                        <a href="javascript: void(null);">
                          Рассчитаем
                        </a>
                        <a href="javascript: void(null);">
                          Разработаем и согласуем
                        </a>
                        <a href="javascript: void(null);">
                          Испытание и защита конструкций
                        </a>
                      </div>
                      <div class="col-md-3">
                        <img src="/img/prod.jpg" alt="">
                        <h3>Пожарная <br> сигнализация</h3>
                        <p>
                          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
                        </p>
                        <a href="javascript: void(null);" class="cta">
                          Заказать
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
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
<!-- <div id="main" class="navigation__panel">
  <div class="row">
    <div class="col-md-3">
      <a href="javascript: void(null);">
        1 Проектирование и монтаж
      </a>
      <a href="javascript: void(null);">
        Техническое обслуж. систем любой сложности
      </a>
      <a href="javascript: void(null);">
        Рассчитаем
      </a>
      <a href="javascript: void(null);">
        Разработаем и согласуем
      </a>
      <a href="javascript: void(null);">
        Испытание и защита конструкций
      </a>
    </div>
    <div class="col-md-3">
      <a href="javascript: void(null);">
        Проектирование и монтаж
      </a>
      <a href="javascript: void(null);">
        Техническое обслуж. систем любой сложности
      </a>
      <a href="javascript: void(null);">
        Рассчитаем
      </a>
      <a href="javascript: void(null);">
        Разработаем и согласуем
      </a>
      <a href="javascript: void(null);">
        Испытание и защита конструкций
      </a>
    </div>
    <div class="col-md-3">
      <a href="javascript: void(null);">
        Проектирование и монтаж
      </a>
      <a href="javascript: void(null);">
        Техническое обслуж. систем любой сложности
      </a>
      <a href="javascript: void(null);">
        Рассчитаем
      </a>
      <a href="javascript: void(null);">
        Разработаем и согласуем
      </a>
      <a href="javascript: void(null);">
        Испытание и защита конструкций
      </a>
    </div>
    <div class="col-md-3">
      <img src="/img/prod.jpg" alt="">
      <h3>Пожарная <br> сигнализация</h3>
      <p>
        Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
      </p>
      <a href="javascript: void(null);" class="cta">
        Заказать
      </a>
    </div>
  </div>
</div> -->
<!-- <div id="service" class="navigation__panel">
  <div class="row">
    <div class="col-md-3">
      <a href="javascript: void(null);">
        2 Проектирование и монтаж
      </a>
      <a href="javascript: void(null);">
        Техническое обслуж. систем любой сложности
      </a>
      <a href="javascript: void(null);">
        Рассчитаем
      </a>
      <a href="javascript: void(null);">
        Разработаем и согласуем
      </a>
      <a href="javascript: void(null);">
        Испытание и защита конструкций
      </a>
    </div>
    <div class="col-md-3">
      <a href="javascript: void(null);">
        Проектирование и монтаж
      </a>
      <a href="javascript: void(null);">
        Техническое обслуж. систем любой сложности
      </a>
      <a href="javascript: void(null);">
        Рассчитаем
      </a>
      <a href="javascript: void(null);">
        Разработаем и согласуем
      </a>
      <a href="javascript: void(null);">
        Испытание и защита конструкций
      </a>
    </div>
    <div class="col-md-3">
      <a href="javascript: void(null);">
        Проектирование и монтаж
      </a>
      <a href="javascript: void(null);">
        Техническое обслуж. систем любой сложности
      </a>
      <a href="javascript: void(null);">
        Рассчитаем
      </a>
      <a href="javascript: void(null);">
        Разработаем и согласуем
      </a>
      <a href="javascript: void(null);">
        Испытание и защита конструкций
      </a>
    </div>
    <div class="col-md-3">
      <img src="/img/prod.jpg" alt="">
      <h3>Пожарная <br> сигнализация</h3>
      <p>
        Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
      </p>
      <a href="javascript: void(null);" class="cta">
        Заказать
      </a>
    </div>
  </div>
</div> -->
<div class="carousel">
  <div class="carousel__wrapper">
    <div class="row ">
      <div class="col-xs-12">
        <div class="swiper-container">
          <div class="swiper-wrapper">

            <!-- repeat .swiper-slide for slider content -->
            <div class="swiper-slide">
              <div class="slide slide1">
                <div class="slider__text">
                  <h3>
                    Почему мы
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea com.
                  </p>
                  <a href="javascript: void(null);" class="cta">
                    Заказать
                  </a>
                </div>
              </div>
            </div>

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
<div class="main">
  <div class=" container">
    <div class="row">
      <div class="col-xs-12">
        <h1>
          Услуги
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <?= $content ?>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <img src="/img/prod.jpg" alt="">
        <h3>Пожарная <br> сигнализация</h3>
        <p>
          Вы экономите свое время, сразу отсеивая неадекватных или случайных кандидатов.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 text-right cta-row">
        <a href="javascript: void(null);" class="cta">
          Заказать
        </a>
      </div>
    </div>
  </div>
</div>
  <!-- content -->
  <div class="slider">
    <div class=" container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1>
            Нашы работы
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 slider__wrapper">
          <div class="swiper-container2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="/img/img_slider.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="/img/img_slider.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="/img/img_slider.png" alt="">
              </div>
              <div class="swiper-slide">
                <img src="/img/img_slider.png" alt="">
              </div>
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
          <a href="javascript: void(null);" class="cta">
            Заказать
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- content -->
<!-- footer -->
<div class="footer">
  <div class="container">
    <div class="row sub__footer">
      <div class="col-sm-6 text-left">
        Безопасность 01
      </div>
      <div class="col-sm-6 text-right">
        <a href="tel:89291016310" class="tel">89291016310</a> <a href="mailto:bez-01@bk.ru">bez-01@bk.ru</a>
      </div>
    </div>
    <div class="row quick_links">
      <div class="col-xs-3">
        <a href="javascript: void(null);">Быстрые ссылки</a>
      </div>
    </div>
  </div>
</div>

<!-- Modals -->
<div style="display: none;">
  <div class="box-modal" id="orderModal">
    <div class="box-modal_close arcticmodal-close">
      Закрыть
    </div>
    <form>
      <div class="form-group">
        <label for="inputOrderName">Имя</label>
        <input class="form-control" type="text" name="name" id="inputOrderName">
      </div>
      <div class="form-group">
        <label for="inputOrderPhone">Телефон*</label>
        <input class="form-control" type="text" name="phone" id="inputOrderPhone">
      </div>
      <div class="form-group">
        <label for="inputOrderSubject">Тема*</label>
        <input class="form-control" type="text" name="subject" id="inputOrderSubject">
      </div>
      <div class="form-group">
        <label for="textareaOrderMessage">Сообщение*</label>
        <textarea class="form-control" name="message" rows="8" cols="40"></textarea>
      </div>
      <button type="submit" class="btn btn-default">Заказать</button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/js/swiper.jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="/js/plugins.js"></script>

<script src="/js/vendor/ripple.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/pageActions.js"></script>

<!-- PLUGINS LEVEL -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
