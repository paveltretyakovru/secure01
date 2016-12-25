<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ourworks`.
 */
class m161225_224320_create_ourworks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('ourworks', [
            'id' => $this->primaryKey(),
            'url' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('ourworks');
    }
}
