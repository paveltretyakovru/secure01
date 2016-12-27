<?php

use yii\db\Migration;

class m161227_125435_add_body_column_to_pages extends Migration
{
    public function up()
    {
      $this->addColumn('pages', 'body', $this->text());
    }

    public function down()
    {
      $this->dropColumn('pages', 'body');
    }
}
