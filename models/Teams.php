<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property integer $id
 * @property string $name
 * @property integer $club_id
 * @property string $season
 * @property string $short
 * @property string $year
 *
 * @property Subscriptions[] $subscriptions
 * @property Clubs $club
 */
class Teams extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'club_id', 'short', 'year'], 'required'],
            [['club_id'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['season', 'year'], 'string', 'max' => 4],
            [['short'], 'string', 'max' => 10]
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
            'club_id' => 'Club ID',
            'season' => 'Saison',
            'short' => 'Kürzel',
            'year' => 'Jahrgang',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubscriptions()
    {
        return $this->hasMany(Subscriptions::className(), ['team_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClub()
    {
        return $this->hasOne(Clubs::className(), ['id' => 'club_id']);
    }
}
