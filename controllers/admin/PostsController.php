<?php

namespace app\controllers\admin;

use Yii;
use app\models\Post;
use app\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PostsController implements the CRUD actions for Post model.
 */
class PostsController extends Controller
{
    public $layout = 'secure01Admin';

    public function createDirectory($path) {
        //$filename = "/folder/{$dirname}/";
        if (file_exists($path)) {
            //echo "The directory {$path} exists";
        } else {
            mkdir($path, 0775, true);
            //echo "The directory {$path} was successfully created.";
        }
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Post();
        $pages = $this->getPagesArray();

        if ($model->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($model, 'image');

            if( $file && $file->tempName ) {
              $model->file = $file;

              $dir = Yii::getAlias('@webroot/media/');
              $fileName = $model->file->baseName.'.'.$model->file->extension;
              $model->file->saveAs($dir . $fileName);
              $model->file = $fileName;
              $model->image = $fileName;
            }

            $date = new \DateTime();
            $model->setAttributes(['created_at' => $date->getTimestamp()]);

            if ($model->validate()) {
              if($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
              }
            } else {
              $errors = $model->errors;

              return $this->render('create', [
                  'model' => $model,
                  'pages' => $pages,
              ]);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
                'pages' => $pages,
            ]);
        }
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $pages = $this->getPagesArray();
        $current_image = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $file = UploadedFile::getInstance($model, 'image');

            if($file && $file->tempName) {
              $model->file = $file;

              if($model->validate(['file'])) {

                // Delete current image
                $alias = Yii::getAlias('@webroot/media/'.$current_image);
                if(file_exists($alias) && is_file($alias)) {
                  unlink($alias);
                  $model->image = '';
                }
              }

              $dir = Yii::getAlias('@webroot/media/');
              $fileName = $model->file->baseName.'.'.$model->file->extension;
              $model->file->saveAs($dir . $fileName);
              $model->file = $fileName;
              $model->image = $fileName;
            } else {
              $model->image = $current_image;
            }

            if ($model->validate()) {
              if($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
              }
            } else {
              $errors = $model->errors;

              return $this->render('update', [
                  'model' => $model,
                  'pages' => $pages,
              ]);
            }
        } else {
            // echo "<pre>";
            // print_r($pages);
            // echo "</pre>";
            return $this->render('update', [
                'model' => $model,
                'pages' => $pages,
            ]);
        }
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Get main menu links pages
     * @return array
     */
    public function getPagesArray() {
      $result = [0 => 'Выберите категорию меню, которой пренадлежит эта статья'];
      $pages = \app\models\Pages::find()
        ->asArray()
        ->all();

      foreach($pages as $page) {
        $result[$page['id']] = $page['title'];
      }

      return $result;
    }
}
