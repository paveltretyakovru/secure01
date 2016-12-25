<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property integer $id
 * @property string $url
 * @property string $title
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
      return 'links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
      return [
          [['url', 'title'], 'required'],
          [['url', 'title'], 'string', 'max' => 255],
      ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Ссылка',
            'title' => 'Подпись',
        ];
    }
}
