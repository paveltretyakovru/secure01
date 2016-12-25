<?php namespace common\components;

use app\models\Slide;

class BaseLayoutHelpers {
  public static function getSlides()
  {
    $slides = Slide::find()->all();
    return $slides;
  }
}
