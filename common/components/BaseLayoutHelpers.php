<?php namespace common\components;

use app\models\Slide;
use app\models\Link;
use app\models\Ourwork;

class BaseLayoutHelpers {
  public static function getSlides()
  {
    return Slide::find()->all();
  }

  public static function getLinks()
  {
    return Link::find()->all();
  }

  public static function getOurworks()
  {
    $ourworks = Ourwork::find()->asArray()->all();

    foreach($ourworks as $key => $ourwork) {
      $parts = parse_url($ourwork['url']);
      parse_str($parts['query'], $query);

      $ourworks[$key]['video_id'] = $query['v'];
    }

    return $ourworks;

  }
}
