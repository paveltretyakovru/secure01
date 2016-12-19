<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $title
 * @property string $desc
 * @property string $longdesc
 * @property string $image
 * @property integer $menupost
 */
class Post extends \yii\db\ActiveRecord
{
    public $image;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['page_id', 'integer'],
            ['menupost', 'boolean'],
            [['desc', 'longdesc'], 'string'],
            ['title', 'string', 'max' => 255],
            [
              'image',
              'file',
              'extensions' => 'jpg,bmp,png',
              'on' => 'insert, update',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page_id' => 'Page ID',
            'title' => 'Title',
            'desc' => 'Desc',
            'longdesc' => 'Longdesc',
            'image' => 'Image',
            'menupost' => 'Menupost',
        ];
    }

    public function beforeSave($insert) {
      if(!parent::beforeSave($insert)) return false;

      if(($this->scenario == 'insert' || $this->scenario == 'update') &&
        ($image = UploadedFile::getInstance($this, 'image'))
      ) {

        // старый файл удалим, потому что загружаем новый
        $this->deleteImage();

        $this->image = $image;
        $this->image->saveAs(
          Yii::getPathOfAlias('webroot.media').DIRECTORY_SEPARATOR.$this->image
        );
      }
      return true;
    }

    public function beforeDelete() {
      if(!parent::beforeDelete()) return false;

      // удалили модель? удаляем и файл
      $this->deleteImage();
      return true;
    }

    public function deleteImage() {
      $imagePath =  Yii::getPathOfAlias('webroot.media') .
                    DIRECTORY_SEPARATOR . $this->image;

      if(is_file($imagePath)) unlink($imagePath);
    }
}
