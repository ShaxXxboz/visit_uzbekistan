<?php

use yii\db\Migration;

/**
 * Handles the creation of table `settings`.
 */
class m180815_191239_create_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('settings', [
            'id' => $this->primaryKey(),
            'site_title' => $this->string()->notNull(),
            'site_description' => $this->text(),
            'site_keywords' => $this->string(),
            'favicon' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('settings');
    }
}
