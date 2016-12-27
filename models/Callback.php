<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "callbacks".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $subject
 * @property string $message
 * @property integer $feedback
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
            [['phone', 'subject'], 'required'],
            [['message'], 'string'],
            [['feedback'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'subject'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'subject' => 'Тема',
            'message' => 'Сообщение',
            'feedback' => 'Обработана',
            'created_at' => 'Создана',
        ];
    }
}
