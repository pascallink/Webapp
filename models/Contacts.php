<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $name
 * @property string $fullname
 * @property string $mail
 * @property string $session
 * @property string $pw
 * @property string $phone
 * @property string $authKey
 * @property string $accessToken
 *
 * @property ConnectionsClub[] $connectionsClubs
 * @property ConnectionsTeam[] $connectionsTeams
 * @property Protocol[] $protocols
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'fullname', 'mail', 'session', 'pw', 'phone', 'authKey', 'accessToken'], 'required'],
            [['name'], 'string', 'max' => 15],
            [['fullname', 'mail', 'session', 'authKey', 'accessToken'], 'string', 'max' => 50],
            [['pw', 'phone'], 'string', 'max' => 25]
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
            'fullname' => 'Fullname',
            'mail' => 'Mail',
            'session' => 'Session',
            'pw' => 'Pw',
            'phone' => 'Phone',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConnectionsClubs()
    {
        return $this->hasMany(ConnectionsClub::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConnectionsTeams()
    {
        return $this->hasMany(ConnectionsTeam::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProtocols()
    {
        return $this->hasMany(Protocol::className(), ['user_id' => 'id']);
    }
}
