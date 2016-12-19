<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\assets\AdminAsset;
use app\assets\VendorBowerAsset;

VendorBowerAsset::register($this);
AdminAsset::register($this);
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
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->
</head>
<body>
<?php $this->beginBody() ?>
<!-- NAVIGATION -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Безопасность01</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li <?=
          (strpos($this->title, 'Pages') !== false) ? 'class="active"' : '';
        ?>><a href="<?=
          Url::to(['admin/pages']);
        ?>">Страницы<span class="sr-only">(current)</span></a></li>

        <li <?=
          (strpos($this->title, 'Posts') !== false) ? 'class="active"' : '';
        ?>><a href="<?=
          Url::to(['admin/posts']);
        ?>">Статьи<span class="sr-only">(current)</span></a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout">Выход</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <?= $content ?>
      </div>
    </div>
  </div>
</main>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
