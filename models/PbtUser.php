<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pbt_user".
 *
 * @property int $id
 * @property string $nama_user
 * @property string $Password
 * @property string $nama_lengkap
 */
class PbtUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pbt_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_user', 'Password', 'nama_lengkap'], 'required'],
            [['nama_user', 'Password', 'nama_lengkap'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_user' => 'Nama User',
            'Password' => 'Password',
            'nama_lengkap' => 'Nama Lengkap',
        ];
    }
}
