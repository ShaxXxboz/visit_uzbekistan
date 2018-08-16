<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 */
class m180815_121759_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'thumbnail' => $this->string(),
            'description' => $this->text(),
            'keywords' => $this->string(),
            'pinned' => $this->tinyInteger(),
            'status' => $this->tinyInteger(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('posts');
    }
}
