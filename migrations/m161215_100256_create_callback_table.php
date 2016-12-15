<?php

use yii\db\Migration;

/**
 * Handles the creation of table `callback`.
 */
class m161215_100256_create_callback_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('callback', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'phone' => $this->string(12)->notNull(),
            'subject' => $this->string()->notNull(),
            'message' => $this->text(),
            'feedback' => $this->boolean(),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('callback');
    }
}
