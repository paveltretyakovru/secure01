<?php namespace app\assets;

use yii\web\AssetBundle;

class Secure01Asset extends AssetBundle
{
  public $sourcePath = '@bower';
  public $css = [
    'arcticModal/arcticmodal/jquery.arcticmodal.css',
    'arcticModal/arcticmodal/themes/simple.css',
  ];
  public $js = [
    'arcticModal/arcticmodal/jquery.arcticmodal.js',
  ];
}
