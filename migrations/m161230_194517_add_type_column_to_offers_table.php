<?php

use yii\db\Migration;

/**
 * Handles adding type to table `offers`.
 */
class m161230_194517_add_type_column_to_offers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
      $this->addColumn('offers', 'type', 'string');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
      $this->dropColumn('offers', 'type');
    }
}
