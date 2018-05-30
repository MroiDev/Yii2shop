<?php

use yii\db\Migration;

/**
 * Class m180530_131025_addField
 */
class m180530_131025_addField extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('products', 'img', $this->string()->after('description'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180530_131025_addField cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180530_131025_addField cannot be reverted.\n";

        return false;
    }
    */
}
