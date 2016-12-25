<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slides".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 */
class Slide extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slides';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок слайда',
            'body' => 'Текст слайда',
        ];
    }
}
