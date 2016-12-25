<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 */
class m161218_171130_create_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'page_id' => $this->integer(),
            'title' => $this->string()->notNull(),
            'desc' => $this->text(),
            'longdesc' => $this->text(),
            'image' => $this->string(),
            'menupost' => $this->boolean()->defaultValue(false),
            'created_at' => 'timestamp on update current_timestamp',
            'updated_at' => $this->timestamp()->defaultValue(0),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('posts');
    }
}
