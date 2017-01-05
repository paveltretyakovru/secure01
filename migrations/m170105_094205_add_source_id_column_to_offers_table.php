<?php

use yii\db\Migration;

/**
 * Handles adding source_id to table `offers`.
 */
class m170105_094205_add_source_id_column_to_offers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
      $this->addColumn('offers', 'type_id', 'integer');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
      $this->dropColumn('offers', 'type_id');
    }
}
