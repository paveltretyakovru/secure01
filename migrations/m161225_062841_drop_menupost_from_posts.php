<?php

use yii\db\Migration;

class m161225_062841_drop_menupost_from_posts extends Migration
{
    public function up()
    {
      $this->dropColumn('posts', 'menupost');
    }

    public function down()
    {
      $this->addColumn(
        'posts',
        'menupost',
        $this->boolean()->defaultValue(false)
      );
    }
}
