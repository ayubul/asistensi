<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyailmiah".
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $jumlah_download
 */
class Karyailmiah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyailmiah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['judul', 'deskripsi', 'jumlah_download'], 'required'],
            [['judul', 'deskripsi', 'jumlah_download'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'deskripsi' => 'Deskripsi',
            'jumlah_download' => 'Jumlah Download',
        ];
    }
}
