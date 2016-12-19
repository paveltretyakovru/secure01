<?php namespace app\assets;

use yii\web\AssetBundle;

class VendorBowerAsset extends AssetBundle
{
  public $sourcePath = '@bower';
  public $css = [
    'arcticModal/arcticmodal/jquery.arcticmodal.css',
    'arcticModal/arcticmodal/themes/simple.css',
  ];
  public $js = [
    // 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.slim.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js',
    'arcticModal/arcticmodal/jquery.arcticmodal.js',
  ];
  public $depends = [
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapAsset',
  ];
}
