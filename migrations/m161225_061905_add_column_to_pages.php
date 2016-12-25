<?php

use yii\db\Migration;

class m161225_061905_add_column_to_pages extends Migration
{
    public function up()
    {
      $this->addColumn('pages', 'post_id', $this->integer()->defaultValue(0));
    }

    public function down()
    {
      $this->dropColumn('pages', 'post_id');
    }
}
