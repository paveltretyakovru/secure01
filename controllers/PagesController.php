<?php

namespace app\controllers;

use app\models\Pages;
use app\models\Post;

class PagesController extends \yii\web\Controller
{
  public $layout = 'secure01';

  public function actionView($id)
  {
    $page = Pages::findOne($id);
    if($page) {
      $posts = Post::find()->where(['page_id' => $id])->all();
      return $this->render('view', compact('page', 'posts'));
    } else {
      return $this->redirect(['site/index']);
    }
  }

  /**
   * Get main menu links pages
   * @return array
   */
  public function getMainMenuPages() {
    $pages = \app\models\Pages::find()
      ->asArray()
      ->all();

    return $pages;
  }

  public function getSubmenuPages() {
    $subpages = \app\models\Post::find()
      ->asArray()
      ->all();

    return $subpages;
  }

}
