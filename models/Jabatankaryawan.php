<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatankaryawan".
 *
 * @property int $id_jabatan
 * @property string $nama_jabatan
 *
 * @property Karyawan[] $karyawans
 */
class Jabatankaryawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatankaryawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jabatan'], 'required'],
            [['nama_jabatan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jabatan' => 'Id Jabatan',
            'nama_jabatan' => 'Nama Jabatan',
        ];
    }
}
