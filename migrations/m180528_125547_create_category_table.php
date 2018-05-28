<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180528_125547_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'name' => $this->string(255),
            'description' => $this->text(),
            'active' => $this->boolean()->defaultValue(0)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }
}
