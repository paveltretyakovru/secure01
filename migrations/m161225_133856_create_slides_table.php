<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slides`.
 */
class m161225_133856_create_slides_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('slides', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'body' => $this->text(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('slides');
    }
}
