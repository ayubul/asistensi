<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa087}}`.
 */
class m230529_144223_create_mahasiswa087_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa087}}', [
            'id' => $this->primaryKey(),
            'no_induk_mahasiswa'=>$this->string(100)->notNull(),
            'nama_mahasiswa'=> $this->string(100)->notNull(),
            'kelas'=> $this->string(100)->notNull(),
            'status'=> $this->string(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa087}}');
    }
}
