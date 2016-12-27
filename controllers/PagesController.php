<?php

namespace app\controllers;

use app\models\Pages;
use app\models\Post;

class PagesController extends \yii\web\Controller
{
  public $layout = 'secure01';

  public function actionIndex()
  {
    $id =  1;
    $page = Pages::findOne($id);
    $show_ourworks = true;
    if($page) {
      $posts = Post::find()->where(['page_id' => $id])->all();
      return $this->render('view', compact('page', 'posts', 'show_ourworks'));
    } else {
      return $this->redirect(['site/index']);
    }
  }

  public function actionView($id)
  {
    $page = Pages::findOne($id);
    $show_ourworks = ($id == 1) ? true : false;
    if($page) {
      $posts = Post::find()->where(['page_id' => $id])->all();
      return $this->render('view', compact('page', 'posts', 'show_ourworks'));
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
