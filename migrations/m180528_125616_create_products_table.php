<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m180528_125616_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'price' => $this->integer(),
            'amount' => $this->integer()->unsigned(),
        ]);

        $this->addForeignKey('products_category', 'products', 'category_id',
            'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
