<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_024".
 *
 * @property int $Id
 * @property string $Nim
 * @property string $Nama
 * @property string $Kelas
 * @property string $Jurusan
 *
 * @property Profil024[] $profil024
 */
class Mahasiswa024 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa_024';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Nim', 'Nama', 'Kelas', 'Jurusan'], 'required'],
            [['Id'], 'integer'],
            [['Nim'], 'string', 'max' => 13],
            [['Nama', 'Jurusan'], 'string', 'max' => 100],
            [['Kelas'], 'string', 'max' => 10],
            [['Id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nim' => 'Nim',
            'Nama' => 'Nama',
            'Kelas' => 'Kelas',
            'Jurusan' => 'Jurusan',
        ];
    }

    /**
     * Gets query for [[Profil024]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProfil024()
    {
        return $this->hasOne(Profil024::class, ['Id_mahasiswa' => 'Id']);
    }
}
