<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "memberpembeli".
 *
 * @property int $id_member
 * @property string $member
 *
 * @property Pembeli[] $pembelis
 */
class Memberpembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'memberpembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member'], 'required'],
            [['member'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_member' => 'Id Member',
            'member' => 'Member',
        ];
    }

    /**
     * Gets query for [[Pembelis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPembelis()
    {
        return $this->hasMany(Pembeli::className(), ['id_member' => 'id_member']);
    }
}
