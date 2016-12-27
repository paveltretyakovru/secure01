<?php

use yii\db\Migration;

class m161227_150028_rename_callback_table extends Migration
{
    public function up()
    {
      $this->renameTable('callback', 'offers');
    }

    public function down()
    {
        $this->renameTable('offers', 'callback');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
