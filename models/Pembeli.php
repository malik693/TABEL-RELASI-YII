<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembeli".
 *
 * @property int $id_pembeli
 * @property string $nama_produk
 * @property int $id_member
 *
 * @property Memberpembeli $member
 * @property Produk[] $produks
 */
class Pembeli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembeli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'id_member'], 'required'],
            [['id_member'], 'integer'],
            [['nama_produk'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembeli' => 'Id Pembeli',
            'nama_produk' => 'Nama Produk',
            'id_member' => 'Id Member',
        ];
    }
    
    public function getMember()
    {
        // same as above
        return $this->hasOne(Memberpembeli::class, ['id_member' => 'id_member']);
    }

}
