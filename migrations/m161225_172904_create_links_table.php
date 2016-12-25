<?php

use yii\db\Migration;

/**
 * Handles the creation of table `links`.
 */
class m161225_172904_create_links_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('links', [
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
        $this->dropTable('links');
    }
}
