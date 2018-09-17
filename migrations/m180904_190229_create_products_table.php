<?php

use yii\db\Migration;

/**
 * Handles the creation of table `products`.
 */
class m180904_190229_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->primaryKey(),
            'fk_user' => $this->integer()->notNull(),
            'fk_category' => $this->integer()->notNull(),
            'name' => $this->string(100)->notNull(),
            'product_type' => $this->string(100)->notNull(), # покупка продажа
            'country' => $this->string(100)->notNull(),
            'city' => $this->string(100)->notNull(),
            'address' => $this->string(100)->notNull()->defaultValue(''),
            'zip' => $this->string(100)->notNull(),
            'law_type' => $this->string(100)->notNull(), # право собственности
            'licensed' => $this->integer()->notNull()->defaultValue(0),
            'price_active' => $this->integer()->notNull()->defaultValue(0), # стоимость собс. активов
            'price_profit' => $this->integer()->notNull()->defaultValue(0), # прибл. доход бизнеса
            'perspectives' => $this->integer()->notNull()->defaultValue(0), # перспективы роста дохода
            'price' => $this->integer()->notNull()->defaultValue(0), # продажная цена
            'price_trade' => $this->integer()->notNull()->defaultValue(0), # продажная цена с торгом
            'description' => $this->string(500)->notNull()->defaultValue(''),
            'img1' => $this->string(100)->notNull()->defaultValue(''),
            'img2' => $this->string(100)->notNull()->defaultValue(''),
            'img3' => $this->string(100)->notNull()->defaultValue(''),
            'status' => $this->integer()->notNull()->defaultValue(0),
            'created_at' => $this->integer()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->notNull()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('products');
    }
}
