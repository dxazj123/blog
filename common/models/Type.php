<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property string $id
 * @property string $class
 * @property string $sort
 * @property int $addtime
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class', 'sort', 'addtime'], 'required'],
            [['sort', 'addtime'], 'integer'],
            [['class'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class' => 'Class',
            'sort' => 'Sotr',
            'addtime' => 'Addtime',
        ];
    }
}
