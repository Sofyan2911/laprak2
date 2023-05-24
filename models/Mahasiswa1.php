<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa1".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 */
class Mahasiswa1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas'], 'required'],
            [['nim'], 'string', 'max' => 15],
            [['nama'], 'string', 'max' => 20],
            [['kelas'], 'string', 'max' => 10],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama' => 'Nama',
            'kelas' => 'Kelas',
        ];
    }
}
