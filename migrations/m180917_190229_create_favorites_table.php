<?php

use yii\db\Migration;

/**
 * Handles the creation of table `favorites`.
 */
class m180917_190229_create_favorites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('favorites', [
            'id' => $this->primaryKey(),
            'fk_user' => $this->integer()->notNull(),
            'fk_product' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('favorites');
    }
}
