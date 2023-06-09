<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profil_087".
 *
 * @property int $id
 * @property int $id_mahasiswa
 * @property string $foto_profil
 */
class Profil087 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_087';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'foto_profil'], 'required'],
            [['id_mahasiswa'], 'integer'],
            [['foto_profil'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'foto_profil' => 'Foto Profil',
        ];
    }
}
