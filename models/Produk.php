<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id_produk
 * @property string $nama_produk
 * @property int $harga
 * @property int $id_karyawan
 * @property int $id_pembeli
 *
 * @property Karyawan $karyawan
 * @property Pembeli $pembeli
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'harga', 'id_karyawan', 'id_pembeli'], 'required'],
            [['harga', 'id_karyawan', 'id_pembeli'], 'integer'],
            [['nama_produk'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_produk' => 'Id Produk',
            'nama_produk' => 'Nama Produk',
            'harga' => 'Harga',
            'id_karyawan' => 'Id Karyawan',
            'id_pembeli' => 'Id Pembeli',
        ];
    }

    public function getKaryawan()
    {
        return $this->hasOne(Karyawan::className(), ['id_karyawan' => 'id_karyawan']);
    }
    public function getPembeli()
    {
        return $this->hasOne(Pembeli::className(), ['id_pembeli' => 'id_pembeli']);
    }
}
