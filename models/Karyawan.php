<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id_karyawan
 * @property string $nama_karyawan
 * @property int $id_jabatan
 *
 * @property Jabatankaryawan $jabatan
 * @property Produk[] $produks
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_karyawan', 'id_jabatan'], 'required'],
            [['id_jabatan'], 'integer'],
            [['nama_karyawan'], 'string', 'max' => 100],
            [['id_jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatankaryawan::className(), 'targetAttribute' => ['id_jabatan' => 'id_jabatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_karyawan' => 'Id Karyawan',
            'nama_karyawan' => 'Nama Karyawan',
            'id_jabatan' => 'Id Jabatan',
        ];
    }

    
    /**
     * Gets query for [[Jabatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan()
    {
        return $this->hasOne(Jabatankaryawan::className(), ['id_jabatan' => 'id_jabatan']);
    }
}
