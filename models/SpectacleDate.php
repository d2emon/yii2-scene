<?php

namespace d2emon\scene\models;

use Yii;

/**
 * This is the model class for table "spectacle_date".
 *
 * @property integer $spectacle_id
 * @property string $play_time
 *
 * @property Spectacle $spectacle
 */
class SpectacleDate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spectacle_date';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['spectacle_id', 'play_time'], 'required'],
            [['spectacle_id'], 'integer'],
            [['play_time'], 'safe'],
            [['spectacle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Spectacle::className(), 'targetAttribute' => ['spectacle_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'spectacle_id' => Yii::t('scene', 'Spectacle ID'),
            'play_time' => Yii::t('scene', 'Play Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpectacle()
    {
        return $this->hasOne(Spectacle::className(), ['id' => 'spectacle_id']);
    }
}
