<?php

use yii\db\Migration;

/**
 * Class m180916_124642_seed_categories
 */
class m180916_124642_seed_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('categories', ['id' => 1, 'name' => 'Медицина']);
        $this->insert('categories', ['id' => 2, 'name' => 'Строительство']);
        $this->insert('categories', ['id' => 3, 'name' => 'Автосервисы']);
        $this->insert('categories', ['id' => 4, 'name' => 'Автомойки']);
        $this->insert('categories', ['id' => 5, 'name' => 'Салоны красоты']);
        $this->insert('categories', ['id' => 6, 'name' => 'Магазины']);
        $this->insert('categories', ['id' => 7, 'name' => 'IT']);
        $this->insert('categories', ['id' => 8, 'name' => 'Машиностроение']);
        $this->insert('categories', ['id' => 9, 'name' => 'Заводы']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('categories', 'id < 10');
    }
}
