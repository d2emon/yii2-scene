<?php

namespace d2emon\scene\models;

use Yii;

/**
 * This is the model class for table "spectacle".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $premiere
 * @property string $poster
 * @property integer $genre_id
 *
 * @property Genre $genre
 */
class Spectacle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spectacle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['premiere'], 'safe'],
            [['genre_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['poster'], 'string', 'max' => 6],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
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
            'premiere' => Yii::t('scene', 'Premiere'),
            'poster' => Yii::t('scene', 'Poster'),
            'genre_id' => Yii::t('scene', 'Genre ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }
}
