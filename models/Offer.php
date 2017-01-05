<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $subject
 * @property string $message
 * @property integer $feedback
 * @property string $created_at
 * @property string $type
 */
class Offer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'subject'], 'required'],
            [['message'], 'string'],
            [['feedback','type_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'subject', 'type'], 'string', 'max' => 255],
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
            'feedback' => 'Обработан',
            'created_at' => 'Создан',
            'type' => 'Источник',
        ];
    }
}
