<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa087".
 *
 * @property int $id
 * @property string $no_induk_mahasiswa
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mahasiswa087 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa087';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['no_induk_mahasiswa', 'nama_mahasiswa', 'kelas', 'status'], 'string', 'max' => 100],
            
        ];  
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID087',
            'no_induk_mahasiswa' => 'No Induk Mahasiswa087',
            'nama_mahasiswa' => 'Nama Mahasiswa087',
            'kelas' => 'Kelas087',
            'status' => 'Status087',
        ];
    }
}
