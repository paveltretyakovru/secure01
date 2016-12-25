<?php

namespace app\controllers;

use app\models\Post;

class PostsController extends \yii\web\Controller
{
  public $layout = 'secure01';

  public function actionView($id)
  {
    $post = Post::findOne($id);
    if($post) {
      return $this->render('view', compact('post'));
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
