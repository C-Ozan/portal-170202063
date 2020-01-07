<?php

namespace kouosl\projemodulu\models;

use Yii;

/**
 * This is the model class for table "sikayet_tablosu".
 *
 * @property int $id
 * @property string $isim
 * @property string $eposta
 * @property string $sikayet
 */
class SikayetTablosu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sikayet_tablosu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'isim', 'eposta', 'sikayet'], 'required'],
            [['id'], 'integer'],
            [['sikayet'], 'string'],
            [['isim', 'eposta'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'İsim',
            'eposta' => 'E-posta',
            'sikayet' => 'Şikayetinizi bu alana giriniz',
        ];
    }
}
