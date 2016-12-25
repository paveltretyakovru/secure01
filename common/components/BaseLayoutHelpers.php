<?php namespace common\components;

use app\models\Slide;
use app\models\Link;

class BaseLayoutHelpers {
  public static function getSlides()
  {
    return Slide::find()->all();
  }

  public static function getLinks()
  {
    return Link::find()->all();
  }
}
