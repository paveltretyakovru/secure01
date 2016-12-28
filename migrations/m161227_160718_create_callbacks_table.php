<?php

use yii\db\Migration;

/**
 * Handles the creation of table `callbacks`.
 */
class m161227_160718_create_callbacks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('callbacks', [
          'id' => $this->primaryKey(),
          'name' => $this->string(70),
          'phone' => $this->string(20),
          'comment' => $this->text(),
          'updated_at' => $this->timestamp()->defaultValue(0),
          'created_at' => 'timestamp on update current_timestamp',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('callbacks');
    }
}
