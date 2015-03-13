<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clubs".
 *
 * @property integer $id
 * @property string $name
 * @property string $full
 *
 * @property Events[] $events
 * @property Teams[] $teams
 */
class Clubs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clubs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'full'], 'required'],
            [['full'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['name'], 'unique']
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
            'full' => 'Full',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['club_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeams()
    {
        return $this->hasMany(Teams::className(), ['club_id' => 'id']);
    }
}
