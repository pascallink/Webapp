<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string $date_begin
 * @property string $date_end
 * @property integer $adress_id
 * @property integer $category
 * @property integer $parent_event
 * @property integer $club_id
 * @property string $name
 * @property string $attachment
 * @property string $date_attachment
 * @property integer $type
 *
 * @property Clubs $club
 * @property Adresses $adress
 * @property Subscriptions[] $subscriptions
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_begin', 'date_end', 'adress_id', 'club_id', 'name'], 'required'],
            [['date_begin', 'date_end', 'date_attachment'], 'safe'],
            [['adress_id', 'category', 'parent_event', 'club_id', 'type'], 'integer'],
            [['attachment'], 'string'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_begin' => 'Date Begin',
            'date_end' => 'Date End',
            'adress_id' => 'Adress ID',
            'category' => 'Category',
            'parent_event' => 'Parent Event',
            'club_id' => 'Club ID',
            'name' => 'Name',
            'attachment' => 'Attachment',
            'date_attachment' => 'Date Attachment',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClub()
    {
        return $this->hasOne(Clubs::className(), ['id' => 'club_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdress()
    {
        return $this->hasOne(Adresses::className(), ['id' => 'adress_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubscriptions()
    {
        return $this->hasMany(Subscriptions::className(), ['event_id' => 'id']);
    }
}
