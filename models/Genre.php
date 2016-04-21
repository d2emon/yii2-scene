<?php

namespace d2emon\scene\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 *
 * @property Spectacle[] $spectacles
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('scene', 'ID'),
            'title' => Yii::t('scene', 'Title'),
            'description' => Yii::t('scene', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpectacles()
    {
        return $this->hasMany(Spectacle::className(), ['genre_id' => 'id']);
    }
}
