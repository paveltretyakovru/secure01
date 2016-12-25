<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property integer $page_id
 * @property string $title
 * @property string $desc
 * @property string $longdesc
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    public $file;

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
            [['title', 'created_at'], 'required'],
            [['desc', 'longdesc'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
            ['file', 'file', 'extensions' => 'png, jpg'],
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
            'title' => 'Заголовок',
            'desc' => 'Короткое описание',
            'longdesc' => 'Длинное описание',
            'image' => 'Изображение',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
        ];
    }
}
