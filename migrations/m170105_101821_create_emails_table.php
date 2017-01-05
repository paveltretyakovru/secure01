<?php

use yii\db\Migration;

/**
 * Handles the creation of table `emails`.
 */
class m170105_101821_create_emails_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('emails', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('emails');
    }
}
