<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m161218_115939_create_pages_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('pages');
    }
}
