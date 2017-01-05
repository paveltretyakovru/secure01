<?php namespace common\components;

use app\models\Slide;
use app\models\Link;
use app\models\Ourwork;
use app\models\Email;

class BaseLayoutHelpers {

  /**
   * Рассылка писем на emails
   * @param  String $emailsText emailsText-
   * @return Bool       [description]
   */
  public static function sendEmails($emailsText = 'Пустое сообщение')
  {
    $emailsArray = Email::find()->asArray()->all();

    return true;
  }

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
