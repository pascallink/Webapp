<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adresses".
 *
 * @property integer $id
 * @property string $street
 * @property string $plz
 * @property string $nr
 * @property string $city
 * @property integer $country
 * @property string $object
 * @property string $text
 *
 * @property Events[] $events
 */
class Adresses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['street', 'plz', 'nr', 'city', 'country', 'object', 'text'], 'required'],
            [['country'], 'integer'],
            [['text'], 'string'],
            [['street'], 'string', 'max' => 100],
            [['plz', 'nr'], 'string', 'max' => 5],
            [['city', 'object'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'street' => 'Street',
            'plz' => 'Plz',
            'nr' => 'Nr',
            'city' => 'City',
            'country' => 'Country',
            'object' => 'Object',
            'text' => 'Text',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['adress_id' => 'id']);
    }
}
