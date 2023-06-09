<?php

use yii\db\Migration;

/**
 * Class m230524_074132_pbt_user
 */
class m230524_074132_pbt_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pbt_user}}',[
        'id' => $this->primarykey(),
        'nama_user' => $this->string()->notNull(),
        'Password' => $this->string()->notNull(),
        'nama_lengkap' => $this->string()->notNull(),
        ]);
    }
}
