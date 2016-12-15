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
