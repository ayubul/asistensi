<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%karyailmiah}}`.
 */
class m230526_002437_create_karyailmiah_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%karyailmiah}}', [
            'id' => $this->primaryKey(),
            'judul' => $this->string()->notNull(),
            'deskripsi' => $this->string()->notNull(),
            'jumlah_download' => $this->string()->notNull(),
        ]);
    }

}
