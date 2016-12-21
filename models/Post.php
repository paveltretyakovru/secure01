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
 * @property integer $menupost
 * @property string $created_at
 * @property string $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
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
            [['title', 'created_at'], 'required'],
            [['desc', 'longdesc'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            ['title', 'string', 'max' => 255],
            ['image', 'file', 'extensions' => 'png, jpg'],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
