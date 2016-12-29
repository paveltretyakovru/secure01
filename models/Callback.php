<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callbacks".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $comment
 * @property string $updated_at
 * @property string $created_at
 */
class Callback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'callbacks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 70],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'comment' => 'Comment',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
